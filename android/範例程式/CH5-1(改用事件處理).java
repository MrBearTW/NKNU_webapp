package tw.com.flag.ch05_buyticket;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity
        implements RadioGroup.OnCheckedChangeListener{
    RadioGroup ticketType;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        ticketType =
                (RadioGroup) findViewById(R.id.ticketType);
    }

    @Override
    public void onCheckedChanged(RadioGroup radioGroup, int i) {
        TextView txv=(TextView)findViewById(R.id.txv);
        int id = ticketType.getCheckedRadioButtonId();
        RadioButton select = (RadioButton) findViewById(id);
        txv.setText("買" + select.getText());
    }
}
