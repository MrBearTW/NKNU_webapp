package tw.com.flag.ch06_listmenu;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity
        implements AdapterView.OnItemClickListener{

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // 取得 ListView 物件, 並設定按下動作的監聽器
        ListView lv=(ListView) findViewById(R.id.lv);
        lv.setOnItemClickListener(this);
    }

    @Override
    public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
        TextView txv = (TextView) view;        // 將被按下的 View 物件轉成 TextView
        TextView msgTxv = (TextView) findViewById(R.id.msgTxv);
        msgTxv.setText("訂" + txv.getText() + "的票");  // 顯示訊息字串
    }
}
