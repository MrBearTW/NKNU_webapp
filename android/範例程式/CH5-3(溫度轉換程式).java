package tw.com.flag.ch05_tempconversion;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.Editable;
import android.text.TextWatcher;
import android.widget.EditText;
import android.widget.RadioGroup;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity
        implements RadioGroup.OnCheckedChangeListener, TextWatcher {
    RadioGroup unit;   //單選鈕群組
    EditText value;    //輸入欄
    TextView degF;    //文字方塊
    TextView degC;    //文字方塊
    TextView degK;    //文字方塊

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        unit  = (RadioGroup)findViewById(R.id.unit);  // 取得『單位』單選鈕群組
        unit.setOnCheckedChangeListener(this);        // 設定 this 為監聽器

        value = (EditText)  findViewById(R.id.value); // 取得輸入欄位
        value.addTextChangedListener(this);           // 設定 this 為監聽器

        degF = (TextView) findViewById(R.id.degF); // 取得文字方塊
        degC = (TextView) findViewById(R.id.degC); // 取得文字方塊
        degK = (TextView) findViewById(R.id.degK); // 取得文字方塊
    }

    @Override
    public void beforeTextChanged(CharSequence s, int start, int count, int after) {
    }

    @Override
    public void onTextChanged(CharSequence s, int start, int before, int count) {
    }

    @Override
    public void afterTextChanged(Editable s) {
        calc();
    }

    @Override
    public void onCheckedChanged(RadioGroup group, int checkedId) {
        calc();
    }

    protected void calc() {
        double val, f, c, k;  // 儲存溫度值換算結果
        String str = value.getText().toString(); //讀取輸入資料並轉為字串
        if(str.isEmpty())   // 如果沒有輸入資料, 就設為 0
            val = 0;
        else                // 否則將資料轉為 Double 數值
            val = Double.parseDouble(str);

        if(unit.getCheckedRadioButtonId()==R.id.unitF) { // 若選擇華氏溫度
            f = val;
            c = (f - 32) * 5 / 9;  // 華氏 => 攝氏
            k = c + 273.15;  // 計算絕對溫度
        }
        else if (unit.getCheckedRadioButtonId()== R.id.unitC) {  // 若是選擇輸入攝氏溫度
            c = val;
            f = c*9/5+32;    // 攝氏 => 華氏
            k = c + 273.15;  // 計算絕對溫度
        } else{   // 若選擇絕對溫度
            k = val;
            c = k - 273.15;  // 絕對 -> 攝氏
            f = c * 9/5 +32; // 攝氏 -> 華氏
        }

        degC.setText(String.format("%.1f",c) + getResources().getString(R.string.charC));// 載入字串資源
        degF.setText(String.format("%.1f",f) + getResources().getString(R.string.charF));
        degK.setText(String.format("%.2fK", k));
    }
}
