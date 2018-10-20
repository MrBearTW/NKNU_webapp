package com.example.administrator.myapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.HashMap;
import java.util.Map;

public class MainActivity extends AppCompatActivity {

    TextView txv;
    EditText edtName, edtPhone, edtAddr;
    public void showToast(String msg){
        Toast.makeText(this, msg, Toast.LENGTH_LONG).show();
    }
    //String url="http://10.0.2.2/testVolly.php";
    String get_url="http://192.168.43.135/testVolly.php";
    String send_url="http://192.168.43.135/testInsertData.php";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        txv = findViewById(R.id.txvShowMsg);
        edtName = findViewById(R.id.edtName);
        edtPhone = findViewById(R.id.edtPhone);
        edtAddr = findViewById(R.id.edtAddr);
    }

    public void btnSendData(View v){
        send_url = send_url + "?name=" + edtName.getText().toString()
        + "&phone=" + edtPhone.getText().toString() + "&addr=" + edtAddr.getText().toString() ;
        RequestQueue mQueue = Volley.newRequestQueue(getApplicationContext());
        StringRequest stringRequest = new StringRequest(Request.Method.POST, send_url,
                new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                txv.setText(response.toString());
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                System.out.println("Error:" + error.toString());
            }
        }) ;
        mQueue.add(stringRequest);
    }
    public void btnGetData(View v){
        RequestQueue mQueue = Volley.newRequestQueue(getApplicationContext());
        StringRequest stringRequest_get = new StringRequest(get_url,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        //System.out.println(response.toString());
                        //showToast(response.toString());
                        txv.setText(response.toString());
                    }
                }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                //System.out.println(error.toString());
                showToast(error.toString());
            }
        });
        mQueue.add(stringRequest_get);
    }
}
