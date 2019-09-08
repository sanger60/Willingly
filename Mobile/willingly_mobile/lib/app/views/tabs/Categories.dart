import 'dart:math';
import 'package:animated_stream_list/animated_stream_list.dart';
import 'package:flutter/foundation.dart';
import 'package:flutter/material.dart';
import 'package:line_icons/line_icons.dart';
import 'package:willingly/app/_routing/routes.dart';
import 'package:willingly/app/utils/loading.dart';
import 'package:willingly/app/utils/sessionId.dart';
import 'package:willingly/app/utils/utils.dart';
import 'package:willingly/json.dart';

class CategoriesPage extends StatefulWidget {
  CategoriesPage({Key key}) : super(key: key);

  _CategoriesPageState createState() => _CategoriesPageState();
}

class _CategoriesPageState extends State<CategoriesPage> {
  bool listIsLoad = false;
  List<Widget> cards = List();
  // Stream<List<Widget>> cards = Stream<List<Widget>>();
  @override
  void initState() {
    fetchCategory().then((e) {
      List<Color> colors = [
        Colors.blue,
        Colors.purpleAccent,
        Colors.amber,
        Colors.orangeAccent,
        Colors.green,
        Colors.cyan,
        Colors.deepPurpleAccent
      ];
      Random rnd = new Random();
      num rndNumber = 0;
      setState(() {
        for (var i = 0; i < e.length; i++) {
          rndNumber = rnd.nextInt(colors.length);
          cards.add(BuildIconTile(
            color: colors[rndNumber],
            icon: Icons.transform,
            title: e[i].name.toString(),
            id: e[i].id,
          ));
        }
        setState(() {
         listIsLoad = true; 
        });
      });
    });
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    final deviceHeight = MediaQuery.of(context).size.height;
    final deviceWidth = MediaQuery.of(context).size.width;

    Widget hr = Divider();
    return Scaffold(
      body: Container(
        padding: EdgeInsets.only(
          top: 50.0,
          left: 20.0,
          right: 20.0,
        ),
        height: deviceHeight,
        width: deviceWidth,
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: <Widget>[
            Container(
              height: 80,
              child: searchField,
            ),
            listIsLoad ==false ? loadingPage():ListView(shrinkWrap: true, children: cards),
          ],
        ),
      ),
    );
  }

  Widget searchField = TextField(
    keyboardType: TextInputType.emailAddress,
    decoration: InputDecoration(
        icon: Icon(
          Icons.search,
          color: Colors.black,
        ),
        labelText: 'Ara',
        labelStyle: TextStyle(
            fontFamily: 'Montserrat',
            fontWeight: FontWeight.bold,
            color: Colors.grey),
        focusedBorder:
            UnderlineInputBorder(borderSide: BorderSide(color: Colors.green))),
  );

  Widget pageTitle = Padding(
    padding: EdgeInsets.only(top: 1.0, bottom: 30.0),
    child: Text(
      "Kategoriler",
      style: TextStyle(
        fontWeight: FontWeight.bold,
        color: Colors.black,
        fontSize: 40.0,
      ),
    ),
  );
}

class BuildIconTile extends StatelessWidget {
  final IconData icon;
  final Color color;
  final String title;
  final String id;
  
  const BuildIconTile({Key key, this.icon, this.color, this.title,this.id})
      : super(key: key);

  @override
  Widget build(BuildContext context) {
    return GestureDetector(
      
      onTap:()=> Navigator.pushNamed(context, categoryDetails,arguments:(title+"##"+id)),
      child: ListTile(
        title: Text(
          title,
          style: TextStyle(fontWeight: FontWeight.bold),
        ),
        leading: Container(
          height: 30.0,
          width: 30.0,
          decoration: BoxDecoration(
            color: color,
            borderRadius: BorderRadius.circular(10.0),
          ),
          child: Center(
            child: Icon(
              icon,
              color: Colors.white,
            ),
          ),
        ),
        trailing: Icon(LineIcons.chevron_circle_right),
      ),
    );
  }
}
