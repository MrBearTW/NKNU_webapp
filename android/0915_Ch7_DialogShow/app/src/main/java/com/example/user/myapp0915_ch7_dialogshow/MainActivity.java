package com.example.user.myapp0915_ch7_dialogshow;

import android.content.DialogInterface;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity implements DialogInterface.OnClickListener{

    TextView txv;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

/*
        AlertDialog.Builder bdr = new AlertDialog.Builder(this);
        bdr.setMessage("示範\n"+"按返回");
        bdr.setTitle("歡迎");
        bdr.setIcon(android.R.drawable.btn_star_big_on);
        bdr.setCancelable(true);
        bdr.show();
*/

        txv = (TextView)findViewById(R.id.answer);

        new AlertDialog.Builder(this)
                .setMessage("喜歡A手機嗎？")
                .setCancelable(false)
                .setIcon(android.R.drawable.ic_menu_edit)
                .setTitle("問卷")
                .setPositiveButton("喜歡",this)
                .setNegativeButton("討厭",this)
                .setNeutralButton("沒意見",null)
                .show();
    }

    @Override
    public void onClick(DialogInterface dialog, int which) {
        if(which == DialogInterface.BUTTON_POSITIVE){
            txv.setText("你喜歡");
        }
        else if(which==DialogInterface.BUTTON_NEGATIVE){
            txv.setText("你討厭");
        }

    }
}
