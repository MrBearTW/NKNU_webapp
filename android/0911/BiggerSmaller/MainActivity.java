package com.example.user.myapp0911;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    //Button btn;
    //Button btn2;
    TextView txv;
    int size;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        txv=(TextView) findViewById(R.id.txv_yoman);
        size = (int) txv.getTextSize();
        //btn=(Button) findViewById(R.id.btn_bigger);
        //btn2=(Button) findViewById(R.id.btn_smaller);
    }

    public void Bigger(View view){
        //int size = (int) txv.getTextSize();
        txv.setTextSize(size++);
    }

    public void Smaller(View view){

        txv.setTextSize(size--);
    }

}
