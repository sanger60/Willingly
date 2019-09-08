import 'package:flutter/material.dart';
import 'package:fluttertoast/fluttertoast.dart';
import 'package:rflutter_alert/rflutter_alert.dart';
import 'package:willingly/app/_routing/routes.dart';
import 'package:willingly/app/utils/colors.dart';
import 'package:line_icons/line_icons.dart';
import 'package:flutter/services.dart';
import 'package:willingly/app/utils/sessionId.dart';
import 'package:willingly/app/utils/shared.dart';
import 'package:willingly/json.dart';



class LoginPage extends StatefulWidget {
  @override
  _LoginPageState createState() => _LoginPageState();
}

class _LoginPageState extends State<LoginPage> {
  final _formKey = GlobalKey<FormState>();

  TextEditingController mailController = TextEditingController();
  TextEditingController passController = TextEditingController();
  String mailErrorText;
  String passErrorText;
  bool clicked = false;

  showToast(String _msg){
      Fluttertoast.showToast(
        msg: _msg,
        toastLength: Toast.LENGTH_LONG,
        gravity: ToastGravity.BOTTOM,
        timeInSecForIos: 2,
        backgroundColor: Colors.black,
        textColor: Colors.white,
        fontSize: 16.0
    );
  }
  @override
  Widget build(BuildContext context) {
    // Change Status Bar Color
    SystemChrome.setSystemUIOverlayStyle(
      SystemUiOverlayStyle(statusBarColor: primaryColor),
    );
    Widget pageTitle = Column(
      crossAxisAlignment: CrossAxisAlignment.start,
      children: <Widget>[
        Text(
          "Giriş Yap.",
          style: TextStyle(
            fontWeight: FontWeight.bold,
            color: Colors.white,
            fontSize: 45.0,
          ),
        ),
        Text(
          "Seni Özledik!",
          style: TextStyle(
            color: Colors.white,
            fontSize: 18.0,
            fontWeight: FontWeight.w500,
          ),
        )
      ],
    );

    Widget emailField = TextFormField(
      controller: mailController,
      decoration: InputDecoration(
        errorText: mailErrorText,
        labelText: 'E-Posta Adresi',
        labelStyle: TextStyle(color: Colors.white),
        prefixIcon: Icon(
          LineIcons.envelope,
          color: Colors.white,
        ),
        enabledBorder: UnderlineInputBorder(
          borderSide: BorderSide(color: Colors.white),
        ),
        focusedBorder: UnderlineInputBorder(
          borderSide: BorderSide(color: Colors.white),
        ),
      ),
      keyboardType: TextInputType.emailAddress,
      style: TextStyle(color: Colors.white),
      cursorColor: Colors.white,
    );

    Widget passwordField = TextFormField(
      onEditingComplete: (){
        setState(() {
         if(passController.text.isEmpty){
          passErrorText='şifre kısmı boş bırakamazsınız';
          }
          else{
            passErrorText = null;
          } 
        });
      },
      controller: passController,
      decoration: InputDecoration(
        errorText: passErrorText,
        errorStyle: TextStyle(color: Colors.white),
        labelText: 'Parola',
        labelStyle: TextStyle(color: Colors.white),
        prefixIcon: Icon(
          LineIcons.lock,
          color: Colors.white,
        ),
        enabledBorder: UnderlineInputBorder(
          borderSide: BorderSide(color: Colors.white),
        ),
        focusedBorder: UnderlineInputBorder(
          borderSide: BorderSide(color: Colors.white),
        ),
      ),
      keyboardType: TextInputType.text,
      style: TextStyle(color: Colors.white),
      cursorColor: Colors.white,
      obscureText: true,
    );

    Widget loginForm = Padding(
      padding: EdgeInsets.only(top: 30.0),
      child: Form(
        key: _formKey,
        child: Column(
          children: <Widget>[emailField, passwordField],
        ),
      ),
    );
    
    Widget loginBtn = Container(
      margin: EdgeInsets.only(top: 40.0),
      height: 60.0,
      width: MediaQuery.of(context).size.width,
      decoration: BoxDecoration(
        borderRadius: BorderRadius.circular(7.0),
        border: Border.all(color: Colors.white),
        color: Colors.white,
      ),
      child:clicked == false ? RaisedButton(
        elevation: 5.0,
        onPressed: (){
          setState(() {
           if(passController.text.isEmpty){
            passErrorText='şifre kısmı boş bırakamazsınız';
            return;
            }
            else{
              passErrorText = null;
            }
            if(mailController.text.isEmpty){
            mailErrorText='mail kısmı boş bırakamazsınız';
            return;
            }
            else{
              passErrorText = null;
            } 
          });
            if(passErrorText==null && mailErrorText == null){
              returnLogin(mailController.text, passController.text).then((e){
                
              if(e.status){
                setState(() {
                 showToast('Giriş Yapılıyor ...');
                 SharedData.setDataTypeString(SessionId.sharedId, e.session);
                 SessionId.id = e.session;
                 Navigator.of(context).pushNamedAndRemoveUntil(homeViewRoute,(Route<dynamic> route) => false);
                });
              }
              else{
                setState(() {
                  showToast('Hatalı Girişim...');
                });
              }
            });
          }
        },
        // onPressed: () =>  Navigator.of(context).pushNamedAndRemoveUntil(homeViewRoute, (Route<dynamic> route) => false),
        color: Colors.white,
        shape: new RoundedRectangleBorder(
          borderRadius: new BorderRadius.circular(7.0),
        ),
        child:
        Text(
          'GİRİŞ YAP',
          style: TextStyle(
            fontWeight: FontWeight.w800,
            fontSize: 20.0,
          ),
        ),
      ):RaisedButton(
        onPressed: (){},
        color: Colors.grey,
        shape: new RoundedRectangleBorder(
          borderRadius: new BorderRadius.circular(7.0),
        ),
        child:
        Text(
          'GİRİŞ YAP',
          style: TextStyle(
            fontWeight: FontWeight.w800,
            fontSize: 20.0,
          ),
        ),),
    );
    
    Widget forgotPassword = Padding(
      padding: EdgeInsets.only(top: 50.0),
      child: InkWell(
        onTap: () => Navigator.pushNamed(context, resetPasswordViewRoute),
        child: Center(
          child: Text(
            'Şifreni mi unuttun?',
            style: TextStyle(
              color: Colors.white70,
              fontSize: 18.0,
              fontWeight: FontWeight.w600,
            ),
          ),
        ),
      ),
    );

    Widget newUser = Padding(
      padding: EdgeInsets.only(top: 20.0),
      child: InkWell(
        onTap: () => Navigator.pushNamed(context, registerViewRoute),
        child: Row(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
            Text(
              'Yeni misin ? ',
              style: TextStyle(
                color: Colors.white70,
                fontSize: 18.0,
                fontWeight: FontWeight.w600,
              ),
            ),
            Text(
              'Hesap Oluştur',
              style: TextStyle(
                color: Colors.white,
                fontSize: 18.0,
                fontWeight: FontWeight.w600,
              ),
            ),
          ],
        ),
      ),
    );
    
      return Scaffold(
      body: SingleChildScrollView(
        child: Container(
          padding: EdgeInsets.only(top: 150.0, left: 30.0, right: 30.0),
          decoration: BoxDecoration(gradient: primaryGradient),
          height: MediaQuery.of(context).size.height,
          width: MediaQuery.of(context).size.width,
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: <Widget>[
              pageTitle,
              loginForm,
              loginBtn,
              forgotPassword,
              newUser,
            ],
          ),
        ),
      ),
    );
    
    
  }
}
