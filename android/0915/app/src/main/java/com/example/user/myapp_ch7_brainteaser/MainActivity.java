package com.example.user.myapp_ch7_brainteaser;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Gravity;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity implements AdapterView.OnItemClickListener{

    String[] queArr = {"第一題","第二","q三","q4","q5","q6"};
    String[] ansArr = {"a1","a2","a3","a4","a5","a6"};
    Toast tos;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        ArrayAdapter<String> adapter =new ArrayAdapter<>(
                this,
                android.R.layout.simple_list_item_1,
                queArr);
        ListView lv = (ListView)findViewById(R.id.lv);
        lv.setOnItemClickListener(this);
        lv.setAdapter(adapter);


    }

    @Override
    public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
        //Toast.makeText(this,"AAA:"+ansArr[position],Toast.LENGTH_SHORT);
        //tos.setGravity(Gravity.TOP | Gravity.RIGHT,0,50);
        tos.makeText(this,"AAA:"+ansArr[position],Toast.LENGTH_SHORT).show();



    }
}
