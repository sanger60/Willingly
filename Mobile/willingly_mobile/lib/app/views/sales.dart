import 'package:flutter/material.dart';
import 'package:willingly/app/utils/colors.dart';

class SalesPage extends StatefulWidget {
  SalesPage({Key key}) : super(key: key);

  _SalesPageState createState() => _SalesPageState();
}

class _SalesPageState extends State<SalesPage> {
  @override
  Widget build(BuildContext context) {
    Widget appBar = Material(
      elevation: 5.0,
      shadowColor: Colors.grey,
      child: Container(
        padding: EdgeInsets.only(left: 1.0, right: 20.0, top: 30.0),
        child: Row(
          mainAxisAlignment: MainAxisAlignment.spaceBetween,
          children: <Widget>[
            IconButton(
              onPressed: () => Navigator.pop(context),
              icon: Icon(Icons.arrow_back),
            ),
            Text(
          "Satışlarım",
          style: TextStyle(
            fontWeight: FontWeight.bold,
            color: Colors.black,
            fontSize: 25.0,
          ),
        ),
            Text('       '),
          ],
        ),
      ),
    );

    return Scaffold(
      body: Center(
        child: Container(
          padding: EdgeInsets.only(top: 0.0, left: 0.0, right: 00.0),
          decoration: BoxDecoration(gradient: primaryGradient),
          height: MediaQuery.of(context).size.height,
          width: MediaQuery.of(context).size.width,
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: <Widget>[
              appBar,
              Container(
                padding: EdgeInsets.fromLTRB(0, 10, 0, 10),
                child: ListView(
                  shrinkWrap: true,
                  children: <Card>[
                    Card(
                      child: ListTile(
                        leading: Icon(Icons.notifications,size: 40,),
                        title: Text('Bildirimler'),
                        subtitle: Text('Uygulamayla ilgili son bilgileri alin'),
                        trailing: Icon(Icons.keyboard_arrow_right),
                      ),
                    ),
                  ],
              ),
              )
            ],
          ),
        ),
      ),
    );
  }
}