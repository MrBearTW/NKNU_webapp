package com.example.user.a1004_ch8_multiactivity;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


    }
    public void gotoSecondActivity(View v){
        Intent it = new Intent(this,SecondActivity.class);

        startActivity(it);
    }
}
