package com.example.user.myappch5_3checkbox;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.CheckBox;
import android.widget.CompoundButton;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity implements CompoundButton.OnCheckedChangeListener{

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void takeOrder(View v){
        CheckBox chk;
        String msg = "";

        int[] id = {R.id.chk1,R.id.chk2,R.id.chk3,R.id.chk4,R.id.chk5,R.id.chk6,R.id.chk7,R.id.chk8};

        for(int i:id){
            chk = (CheckBox)findViewById(i);
            if(chk.isChecked())
                msg+="\n"+chk.getText();
        }

        if(msg.length()>0)
            msg="你的餐點是："+msg;
        else
            msg="請點餐";

        ((TextView)findViewById(R.id.showOrder)).setText(msg);
    }

    @Override
    public void onCheckedChanged(CompoundButton buttonView, boolean isChecked) {

    }
}
