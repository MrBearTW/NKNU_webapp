package tw.com.flag.ch07_datetimepicker;

import android.app.DatePickerDialog;
import android.app.TimePickerDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.DatePicker;
import android.widget.TextView;
import android.widget.TimePicker;
import android.widget.Toast;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;

public class MainActivity extends AppCompatActivity
        implements View.OnClickListener,
        DatePickerDialog.OnDateSetListener,     // 實作監聽日期交談窗事件的介面
        TimePickerDialog.OnTimeSetListener {

    Calendar c = Calendar.getInstance();  //建立日曆物件
    TextView txDate;                 // 記錄日期文字的元件
    TextView txTime;                 // 記錄時間文字的元件
    long diffDay=0;
    long diffMinute=0;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        txDate = (TextView)findViewById(R.id.textView1);
        txTime = (TextView)findViewById(R.id.textView2);

        txDate.setOnClickListener(this); //設定按下日期文字時的監聽物件
        txTime.setOnClickListener(this); //設定按下時間文字時的監聽物件
    }

    @Override
    public void onClick(View v) {
        if(v == txDate) { // 按的是日期文字
            //建立日期選擇交談窗, 並傳入設定完成時的監聽物件
            new DatePickerDialog(this, this,    // 由活動物件監聽事件
                    c.get(Calendar.YEAR),   //由Calendar物件取得目前的西元年
                    c.get(Calendar.MONTH),  //取得目前月 (由 0 算起)
                    c.get(Calendar.DAY_OF_MONTH)) //取得目前日
                    .show();  //顯示出來
        }
        else if(v == txTime) { // 按的是時間文字
            //建立時間選擇交談窗, 並傳入設定完成時的監聽物件
            new TimePickerDialog(this, this, // 由活動物件監聽事件
                    c.get(Calendar.HOUR_OF_DAY), //取得目前的時 (24小時制)
                    c.get(Calendar.MINUTE),      //取得目前的分
                    true)                        //使用24小時制
                    .show();   //顯示出來
        }
    }
    @Override
    public void onDateSet(DatePicker v, int y, int m, int d) {
        try {
            SimpleDateFormat format = new java.text.SimpleDateFormat("yyyy-MM-dd");
            Date getDate = format.parse(y+"-"+m+"-"+d);
            Date nowDate = format.parse(c.get(Calendar.YEAR) + "-" + c.get(Calendar.MONTH) + "-" + c.get(Calendar.DAY_OF_MONTH));
            diffDay=(getDate.getTime()-nowDate.getTime())/(24*60*60*1000);
        } catch (ParseException e) {
            e.printStackTrace();
        }
        if (diffDay>=0 && diffDay<=14){
            if (m == 8 && d == 28)     // 判斷日期是否為 9 月 28 日
                txDate.setText("跟老師說聲「老師好！」");
            else
                txDate.setText("日期：" + y + "/" + (m + 1) + "/" + d); // 將選定日期顯示在螢幕上
        }else{
            ShowToast("請選擇14天內的日期預訂車票!");
            txDate.setText("日期：未設定");
        }

    }

    @Override
    public void onTimeSet(TimePicker v, int h, int m) {
        try {
            SimpleDateFormat format = new java.text.SimpleDateFormat("hh:mm:ss");
            Date getTime = format.parse(h+":"+m+":00");
            Date nowTime = format.parse(c.get(Calendar.HOUR_OF_DAY) + ":" + c.get(Calendar.MINUTE) + ":00");
            diffMinute=(getTime.getTime()-nowTime.getTime())/(60*1000);
            //ShowToast(String.valueOf(diffMinute));
        } catch (ParseException e) {
            e.printStackTrace();
        }
        if (h < 6 || h>=23) {
                ShowToast("休息是為了更長遠的路! 營業時間為06~23!");
                txTime.setText("時間：未設定");
        }else if (diffDay==0 && diffMinute <= 30) {
                ShowToast("僅接受半小時前之訂票。");
                txTime.setText("時間：未設定");
        }else{
            if (h < 10 && m < 10)
                txTime.setText("時間：0" + h + ":0" + m);    // 將選定的時間顯示在螢幕上
            else if (h < 10)
                txTime.setText("時間：0" + h + ":" + m);    // 將選定的時間顯示在螢幕上
            else if (m < 10)
                txTime.setText("時間：" + h + ":0" + m);    // 將選定的時間顯示在螢幕上
            else
                txTime.setText("時間：" + h + ":" + m);    // 將選定的時間顯示在螢幕上
        }
    }

    public void ShowToast(String msg) {
        Toast.makeText(this, msg, Toast.LENGTH_SHORT).show();
    }
}
