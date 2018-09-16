package tw.com.flag.ch06_ticketspinner;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Spinner;
import android.widget.TextView;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity implements AdapterView.OnItemSelectedListener{
    TextView txv;
    Spinner cinema, time, hall;	// 戲院、場次清單物件

    @Override

    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        txv = (TextView) findViewById(R.id.txv);
        cinema = (Spinner) findViewById(R.id.cinema);
        hall= (Spinner) findViewById(R.id.hall);
        time = (Spinner) findViewById(R.id.time);

    }

    @Override
    public void onItemSelected(AdapterView<?> adapterView, View view, int i, long l) {
        String[] cinemas = getResources().             // 取得字串資源中
                getStringArray(R.array.cinemas);      // 的字串陣列

        String[] times=getResources().			// 取得字串資源中
                getStringArray(R.array.times);	// 的字串陣列

        String[] halls=getResources().			// 取得字串資源中
                getStringArray(R.array.hall_Other);	// 的字串陣列

        int idxCinema=cinema.getSelectedItemPosition();	// 取被選取的項目
        int idxHall=hall.getSelectedItemPosition();	// 取被選取的項目
        int idxTime  =time.getSelectedItemPosition();	// 取被選取的項目

        txv.setText("您訂"+cinemas[idxCinema]+","+halls[idxHall]+","+times[idxTime]+"的票");		// 顯示選取的項目
    }

    @Override
    public void onNothingSelected(AdapterView<?> adapterView) {

    }
}
