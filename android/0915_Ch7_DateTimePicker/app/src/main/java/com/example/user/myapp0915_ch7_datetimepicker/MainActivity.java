package com.example.user.myapp0915_ch7_datetimepicker;

import android.app.DatePickerDialog;
import android.app.TimePickerDialog;
import android.content.DialogInterface;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.DatePicker;
import android.widget.TextView;

import java.util.Calendar;

public class MainActivity extends AppCompatActivity implements View.OnClickListener,DatePickerDialog.OnDateSetListener,TimePickerDialog.OnClickListener{

    Calendar c = Calendar.getInstance();
    TextView txDate;
    TextView txTime;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        txDate=(TextView)findViewById(R.id.textView1);
        txTime=(TextView)findViewById(R.id.textView2);
        txDate.setOnClickListener(this);
        txTime.setOnClickListener(this);
    }

    @Override
    public void onDateSet(DatePicker view, int year, int month, int dayOfMonth) {

    }

    @Override
    public void onClick(DialogInterface dialog, int which) {

    }

    @Override
    public void onClick(View v) {
        if(v==txDate){
            new DatePickerDialog(this,this,
                    c.get(Calendar.YEAR),
                    c.get(Calendar.MONTH),
                    c.get(Calendar.DAY_OF_MONTH)).show();
        }
        else if(v==txTime){
            new TimePickerDialog(this)
        }

    }
}
