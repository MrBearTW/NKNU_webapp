package com.example.user.a1004_ch10_camera;

import android.app.Activity;
import android.content.Intent;
import android.graphics.Bitmap;
import android.provider.MediaStore;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
    public void onGet(View v){
        Intent it =new Intent(MediaStore.ACTION_IMAGE_CAPTURE);
        startActivityForResult(it,100);
    }
    protected void onActivityResult(int requestCode,int resultCode,Intent data){
        super.onActivityResult(requestCode,resultCode,data);
        if(requestCode== Activity.RESULT_OK&&requestCode==100){
            Bundle extras = data.getExtras();
                    Bitmap bmp = (Bitmap)extras.get("data");
                    ImageView imv = (ImageView)findViewById(R.id.imageView);
                    imv.setImageBitmap(bmp);
        }
        else{
            Toast.makeText(this,"沒有拍到照片",Toast.LENGTH_LONG).show();
        }
    }
}
