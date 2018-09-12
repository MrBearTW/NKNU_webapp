package com.example.user.myapp0912temp;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.Editable;
import android.text.TextWatcher;
import android.widget.EditText;
import android.widget.RadioGroup;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity implements RadioGroup.OnCheckedChangeListener,TextWatcher{

    RadioGroup unit;
    EditText value;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        unit = (RadioGroup)findViewById(R.id.unit);
        unit.setOnCheckedChangeListener(this);

        value = (EditText)findViewById(R.id.value);
        value.addTextChangedListener(this);
    }

    @Override
    public void beforeTextChanged(CharSequence s, int start, int count, int after) {
        calc();
    }

    @Override
    public void onTextChanged(CharSequence s, int start, int before, int count) {

    }

    @Override
    public void afterTextChanged(Editable s) {

    }

    @Override
    public void onCheckedChanged(RadioGroup group, int checkedId) {
        calc();
    }

    protected void calc(){
        TextView degF=(TextView)findViewById(R.id.degF);
        TextView degC=(TextView)findViewById(R.id.degC);

        double f=0.0;
        double c=0.0;

        if(unit.getCheckedRadioButtonId()==R.id.unitF){
            f = Double.parseDouble(value.getText().toString());
            c = (f-32)*5/9;
        }else{
            c = Double.parseDouble(value.getText().toString());
            f = c*9/5+32;
        }

        degC.setText(String.format("%.1f",c)+getResources().getString(R.string.charC));
        degF.setText(String.format("%.1f",f)+getResources().getString(R.string.charF));
    }
}
