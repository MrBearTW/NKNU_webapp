package com.example.user.a1004_ch09_intentstarter;

import android.app.SearchManager;
import android.content.Intent;
import android.net.Uri;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void onClick(View v){
        Intent it = new Intent(Intent.ACTION_VIEW);

    switch (v.getId()){
        case R.id.buttonEmail:
            it.setData(Uri.parse("mailto:service@flag.com.tw"));
            it.putExtra(Intent.EXTRA_CC,new String[]{"test@flag.com.tw"});
            it.putExtra(Intent.EXTRA_SUBJECT,"資料已收到");
            it.putExtra(Intent.EXTRA_TEXT,"妳好，\n已收到，謝謝");
            break;
        case R.id.buttonSms:
            it.setData(Uri.parse("sms:0900000999?body=您好"));
            break;
        case R.id.buttonWeb:
            it.setData(Uri.parse("http://google.com"));
            break;
        case R.id.buttonGps:
            it.setData(Uri.parse("geo:22.626606,120.321780"));
            break;
        case R.id.buttonWebSearch:
            it.setAction(Intent.ACTION_WEB_SEARCH);
            it.putExtra(SearchManager.QUERY,"高師大");
            break;
        }
        startActivity(it);
    }
}
