# 2018/09/08
Android 4
API 15


Appearance & Behavior > System Settings > Android SDK
選API 15 安裝


Build,Execution,Deployment > Debugger > Instant Run  
全部都不要勾

有紅字的話
Build > Rebuild Project

# 2018/09/11
設定>軟體版本>連點七下，進入開發者模式   
USB偵錯>打勾  
裝置管理員>看的到Android裝置

### 看不到彈簧線
app>res>values>styles.xml 
在Theme.前面加上`<style name="AppTheme" parent="Base.Theme.AppCompat.Light.DarkActionBar">`
加入`Base`   




### OnClick設定監聽事件
1.
`{`前加入`implements View.OnClickListener`
public class MainActivity extends AppCompatActivity `這裡`{
2.
出現紅線後 ALT + Enter 會把方法實做出來
    @Override
    public void onClick(View v) {
    }    
3.
Button btn;
btn = findViewById(R.id.button);
btn.setOnClickListener(this);



###
# 2018/09/12
觸控讓手機震動CH4-28
溫度換算

### 程式邏輯建立
https://studio.code.org/courses

# 2018/09/13

android.support.constraint.ConstraintLayout
linearlayout