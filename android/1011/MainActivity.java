package com.example.appuser.volleytest;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonObjectRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

public class MainActivity extends AppCompatActivity {

    String showUri = "http://10.0.2.2/VollryTest.php";//手機模擬器連結本機伺服器
    //String showUri = "http://192.168.x.x/VollryTest.php"; // 真實手機和伺服器在同區網內
    //String showUri = "http://www.xxx.com/VollryTest.php"; // 真實手機和伺服器在網際網路內
    RequestQueue requestQueue;
    TextView txv;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        txv = findViewById(R.id.textView);

        requestQueue = Volley.newRequestQueue(getApplicationContext());
        JsonObjectRequest jsonObjectRequest = new JsonObjectRequest
                (Request.Method.POST,showUri, new Response.Listener<JSONObject>() {
            @Override
            public void onResponse(JSONObject response) {
                System.out.println(response.toString());
                try {
                    JSONArray data = response.getJSONArray("data");
                    for (int i=0; i<data.length(); i++) {
                        JSONObject jsdata = data.getJSONObject(i);
                        String st_id = jsdata.getString("st_id");
                        String st_na = jsdata.getString("st_na");
                        String st_gender = jsdata.getString("st_gender");
                        String st_email = jsdata.getString("st_email");
                        String st_tel = jsdata.getString("st_tel");
                        String st_addr = jsdata.getString("st_addr");
                        txv.append(st_id +", " +st_na +", " +st_gender +", "
                                +st_email +", " +st_tel +", " +st_addr +"--\n");
                    }
                    txv.append("--------------\n");
                } catch (JSONException e) {
                    e.printStackTrace();
                }
            }
        }, new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        System.out.append(error.getMessage());
                    }
                });
        requestQueue.add(jsonObjectRequest);
    }
}
