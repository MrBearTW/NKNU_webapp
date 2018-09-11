package com.example.user.myapp0911counter;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.GestureDetector;
import android.view.MotionEvent;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity implements View.OnClickListener,View.OnLongClickListener{

    TextView txv;
    Button btn;
    int counter =0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        txv = (TextView) findViewById(R.id.textView);
        btn = (Button) findViewById(R.id.button);
        btn.setOnClickListener(this);
        btn.setOnLongClickListener(this);

    }

    @Override
    public void onClick(View v) {
        txv.setText(String.valueOf(counter++));

    }

    @Override
    public boolean onLongClick(View v) {
        counter=0;
        txv.setText(String.valueOf(counter));
        return true;
    }

/*
    @Override
    public boolean onDoubleTap(MotionEvent e) {
        counter=counter+10;
        txv.setText(String.valueOf(counter));
        return false;
    }
*/
}
