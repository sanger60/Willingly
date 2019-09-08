import 'package:flutter/material.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:willingly/app/_routing/routes.dart';
import 'package:willingly/app/models/user.dart' as us;
import 'package:willingly/app/utils/colors.dart';
import 'package:willingly/app/utils/loading.dart';
import 'package:willingly/app/utils/sessionId.dart';
import 'package:willingly/app/utils/utils.dart';
import 'package:flutter/services.dart';
import 'package:willingly/json.dart';

class LandingPage extends StatefulWidget {
  LandingPage({Key key}) : super(key: key);

  _LandingPageState createState() => _LandingPageState();
}

class _LandingPageState extends State<LandingPage> {
  bool hasId;
  Future hasData() async {
    final kayitAraci = await SharedPreferences.getInstance();
    bool _id = kayitAraci.containsKey(SessionId.sharedId);
    return _id;
  }
  Future loadData() async {
    final kayitAraci = await SharedPreferences.getInstance();
    String _id = kayitAraci.get(SessionId.sharedId);
    return _id;
  }

  @override
  void initState() {
    hasData().then((e) {
      setState(() {
        print('e => $e');
        if (e == null) {
          hasId = false;
        } else {
          hasId = e;
        }
        if(hasId){
          loadData().then((_id){
            SessionId.id = _id;
            returnUser().then((i){
              print('i => $i');
              User a =i.user; 
              us.User.about = a.about;
              us.User.adress = a.adress;
              us.User.age = a.age;
              us.User.emailVerification = a.emailVerification;
              us.User.id = a.id;
              us.User.imageUrl = a.imageUrl;
              us.User.mail = a.mail;
              us.User.name = a.name;
              us.User.password = a.password;
              us.User.phone = a.phone;
              us.User.phoneVerification = a.phoneVerification;
              us.User.rate = a.rate;
              us.User.skills = a.skills;
              us.User.surname = a.surname;
              us.User.username = a.username;
              
            });
            Navigator.of(context).pushNamedAndRemoveUntil(
            homeViewRoute, (Route<dynamic> route) => false);
          });
          
        }
      });
    });
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    // Change Status Bar Color
    SystemChrome.setSystemUIOverlayStyle(
      SystemUiOverlayStyle(statusBarColor: primaryColor),
    );

    Widget logo = Container(
      height: 120.0,
      width: 120.0,
      decoration: BoxDecoration(
        image: DecorationImage(
          image: AvailableImages.appLogo,
          fit: BoxFit.contain,
        ),
      ),
    );

    Widget appName = Column(
      children: <Widget>[
        Text(
          AppConfig.appName,
          style: TextStyle(
            fontWeight: FontWeight.bold,
            color: Colors.white,
            fontSize: 30.0,
          ),
        ),
        Container(
          width: MediaQuery.of(context).size.width * 2 / 3,
          padding: EdgeInsets.all(3),
          child: Text(
            AppConfig.appTagline,
            textAlign: TextAlign.center,
            style: TextStyle(
                color: Colors.white,
                fontSize: 18.0,
                fontWeight: FontWeight.w500),
          ),
        )
      ],
    );

    Widget loginBtn = Container(
      height: 60.0,
      width: MediaQuery.of(context).size.width,
      decoration: BoxDecoration(
          borderRadius: BorderRadius.circular(7.0),
          border: Border.all(color: Colors.white),
          color: Colors.transparent),
      child: RaisedButton(
        // elevation: 5.0,
        onPressed: () => Navigator.pushNamed(context, loginViewRoute),
        color: Colors.transparent,
        shape: new RoundedRectangleBorder(
          borderRadius: new BorderRadius.circular(7.0),
        ),
        child: Text(
          'GİRİŞ YAP',
          style: TextStyle(
            color: Colors.white,
            fontWeight: FontWeight.w600,
            fontSize: 20.0,
          ),
        ),
      ),
    );
    // GestureDetector(
    //   onTap: () => Navigator.pushNamed(context, loginViewRoute),
    //   child: Container(
    //     height: 60.0,
    //     width: MediaQuery.of(context).size.width,
    //     decoration: BoxDecoration(
    //       borderRadius: BorderRadius.circular(7.0),
    //       border: Border.all(color: Colors.white),
    //       color: Colors.transparent,
    //     ),
    //     child: Center(
    //       child: Text(
    //         'GİRİŞ YAP',
    //         style: TextStyle(
    //           fontWeight: FontWeight.w600,
    //           fontSize: 20.0,
    //           color: Colors.white,
    //         ),
    //       ),
    //     ),
    //   ),
    // );

    Widget registerBtn = Container(
      height: 60.0,
      width: MediaQuery.of(context).size.width,
      decoration: BoxDecoration(
        borderRadius: BorderRadius.circular(7.0),
        border: Border.all(color: Colors.white),
        color: Colors.white,
      ),
      child: RaisedButton(
        elevation: 5.0,
        onPressed: () => Navigator.pushNamed(context, registerViewRoute),
        color: Colors.white,
        shape: new RoundedRectangleBorder(
          borderRadius: new BorderRadius.circular(7.0),
        ),
        child: Text(
          'KAYIT OL',
          style: TextStyle(
            fontWeight: FontWeight.w600,
            fontSize: 20.0,
          ),
        ),
      ),
    );

    Widget buttons = Padding(
      padding: EdgeInsets.only(
        top: 80.0,
        bottom: 30.0,
        left: 30.0,
        right: 30.0,
      ),
      child: Column(
        children: <Widget>[loginBtn, SizedBox(height: 20.0), registerBtn],
      ),
    );

    if (hasId == null) {
      return loadingPage();
    } else {
      if (hasId) {
        
        return Container(color: Colors.white,child: Container(width: 100,),);
      } else {
        return Scaffold(
          body: Container(
            child: Stack(
              children: <Widget>[
                Container(
                  padding: EdgeInsets.only(top: 65.0),
                  decoration: BoxDecoration(gradient: primaryGradient),
                  height: MediaQuery.of(context).size.height,
                  width: MediaQuery.of(context).size.width,
                  child: Column(
                    children: <Widget>[logo, appName, buttons],
                  ),
                ),
              ],
            ),
          ),
        );
      }
    }
  }
}
