package tw.com.flag.ch05_foodmenu_test;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.CheckBox;
import android.widget.CompoundButton;
import android.widget.TextView;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity
        implements CompoundButton.OnCheckedChangeListener {

    // 用來儲存已選取項目的 ID 集合物件
    ArrayList<CompoundButton> selected=new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // 所有核取方塊 ID 的陣列
        int[] chk_id={R.id.chk1,R.id.chk2,R.id.chk3,R.id.chk4,
                R.id.chk5,R.id.chk6,R.id.chk7,R.id.chk8, R.id.small};

        for(int id:chk_id){ // 用迴圈替所有核取方塊加上監聽物件
            CheckBox chk=(CheckBox) findViewById(id);
            chk.setOnCheckedChangeListener(this);
        }
    }


    public void onCheckedChanged(CompoundButton buttonView, boolean isChecked) {
        // 檢查異動項目的 ID 是否為『小字型』的 ID
        if(buttonView.getId()==R.id.small){
            TextView txv=(TextView) findViewById(R.id.showOrder);
            if(isChecked)           //被選取
                txv.setTextSize(15);
            else                    //被取消
                txv.setTextSize(30);
            return; //處理完即返回, 所以『小字型』選項不會被加到點菜的 ArrayList
        }

        if (isChecked)   				// 若項目被選取
            selected.add(buttonView);   	// 加到集合之中
        else              					// 若項目被取消
            selected.remove(buttonView);	// 自集合中移除

    }

    public void takeOrder(View v) {
        String msg="";  // 儲存訊息的字串

        for(CompoundButton i:selected)   // 以迴圈逐一將換行字元及
            msg+="\n"+i.getText();   // 選項文字附加到 msg 字串後面

        if(msg.length()>0) // 有點餐
            msg ="你點購的餐點是："+msg;
        else
            msg ="請點餐!";

        // 在文字方塊中顯示點購的項目
        ((TextView) findViewById(R.id.showOrder)).setText(msg);
    }
 }
