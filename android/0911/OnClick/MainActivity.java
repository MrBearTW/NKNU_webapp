package com.example.user.myapp0911onclick;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity implements View.OnClickListener{
    TextView txv;
    Button btn;
    int size = 24;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        txv = findViewById(R.id.txvvv);
        btn = findViewById(R.id.button);
        btn.setOnClickListener(this);  //註冊監聽器給不同的物件
    }


    @Override
    public void onClick(View v) {
        txv.setTextSize(size++);
    }
}
