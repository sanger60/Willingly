import 'dart:ui';

import 'package:flutter/material.dart';
import 'package:fluttertoast/fluttertoast.dart';
import 'package:willingly/app/_routing/routes.dart';
import 'package:willingly/app/utils/colors.dart';
import 'package:line_icons/line_icons.dart';
import 'package:willingly/app/utils/loading.dart';
import 'package:willingly/app/views/login.dart';
import 'package:willingly/json.dart';

class RegisterPage extends StatefulWidget {
  @override
  _RegisterPageState createState() => _RegisterPageState();
}

class _RegisterPageState extends State<RegisterPage> {
  final _formKey = GlobalKey<FormState>();
  int _genderRadioBtnVal = -1;

  TextEditingController passController = TextEditingController();
  String passErrorText;
  TextEditingController mailController = TextEditingController();
  String mailErrorText;
  TextEditingController nameController = TextEditingController();
  String nameErrorText;
  TextEditingController surnameController = TextEditingController();
  String surnameErrorText;
  TextEditingController phoneController = TextEditingController();
  String phoneErrorText;
  TextEditingController usernameController = TextEditingController();
  String usernameErrorText;

  bool status;
  bool loading = false;
  void _handleGenderChange(int value) {
    setState(() {
      _genderRadioBtnVal = value;
    });
  }

  phoneCheck() {
    setState(() {
      if (phoneController.text.isEmpty) {
        phoneErrorText = "telefon numarası kısmını boş bırakamazsın";
      } else if (phoneController.text.length < 10) {
        phoneErrorText = "Geçerli bir telefon numarası giriniz";
      } else {
        try {
          if (phoneController.text.contains('+')) {
            phoneController.text.replaceAll('+', '');
          }
          int numara = int.parse(phoneController.text);
          phoneErrorText = null;
        } catch (e) {
          phoneErrorText = 'Geçerli bir telefon numarası giriniz';
        }
      }
    });
  }

  passCheck() {
    setState(() {
      if (passController.text.isEmpty) {
        passErrorText = "şifre kısmını boş bırakamazsın";
      } else if (passController.text.length <= 6) {
        passErrorText = "Şifreniz minimum 7 haneli olmalıdır";
      } else {
        try {
          num pass = int.parse(passController.text);
          passErrorText = 'Şifrenizde minimum 1 tane harf bulunmalıdır ';
        } catch (e) {
          passErrorText = null;
        }
      }
    });
  }

  mailCheck() {
    setState(() {
      if (mailController.text.isEmpty) {
        mailErrorText = "mail kısmını boş bırakamazsın";
      } else if (!mailController.text.contains('@') ||
          !mailController.text.contains('.')) {
        mailErrorText = 'Geçerli bir mail adresi giriniz';
      } else {
        mailErrorText = null;
      }
    });
  }

  surnameCheck() {
    setState(() {
      if (surnameController.text.isEmpty) {
        surnameErrorText = "Soyad kısmını boş bırakamazsınız";
      } else {
        surnameErrorText = null;
      }
    });
  }

  usernameCheck() {
    setState(() {
      if (usernameController.text.isEmpty) {
        usernameErrorText = "Kullanıcı adı kısmını boş bırakamazsınız";
      } else {
        usernameErrorText = null;
      }
    });
  }

  nameCheck() {
    setState(() {
      if (nameController.text.isEmpty) {
        nameErrorText = "Ad kısmını boş bırakamazsın";
      } else {
        nameErrorText = null;
      }
    });
  }

  Future deneme(Post post) async {
    Post s = await postDeneme(post.toMap());
    return s;
  }

  showToast(String _msg) {
    Fluttertoast.showToast(
        msg: _msg,
        toastLength: Toast.LENGTH_LONG,
        gravity: ToastGravity.BOTTOM,
        timeInSecForIos: 2,
        backgroundColor: Colors.black,
        textColor: Colors.white,
        fontSize: 16.0);
  }

  @override
  Widget build(BuildContext context) {
    Widget appBar = Padding(
      padding: EdgeInsets.only(bottom: 40.0),
      child: Row(
        mainAxisAlignment: MainAxisAlignment.start,
        children: <Widget>[
          IconButton(
            onPressed: () => Navigator.pop(context),
            icon: Icon(
              Icons.arrow_back,
              color: Colors.black,
            ),
          )
        ],
      ),
    );

    Widget pageTitle = Container(
      child: Text(
        "Biraz bize kendini anlat.",
        style: TextStyle(
          fontWeight: FontWeight.bold,
          color: Colors.black,
          fontSize: 40.0,
        ),
      ),
    );

    Widget formFieldSpacing = SizedBox(
      height: 30.0,
    );

    Widget registerForm = Padding(
      padding: EdgeInsets.only(top: 30.0),
      child: Form(
        key: _formKey,
        child: Column(
          children: <Widget>[
            _buildFormField('Adın', LineIcons.user, nameController,
                nameErrorText, nameCheck()),
            formFieldSpacing,
            _buildFormField('Soyadın', LineIcons.user, surnameController,
                surnameErrorText, () => surnameCheck()),
            formFieldSpacing,
            _buildFormField('Kullanıcı Adı', LineIcons.circle_o_notch,
                usernameController, usernameErrorText, () => usernameCheck()),
            formFieldSpacing,
            _buildFormField(
                'E-Posta Adresi',
                LineIcons.envelope,
                mailController,
                mailErrorText,
                () => mailCheck(),
                TextInputType.emailAddress),
            formFieldSpacing,
            // _buildFormField('Telefon Numarası', LineIcons.mobile_phone,phoneController,phoneErrorText,()=>phoneCheck(),TextInputType.phone),
            // formFieldSpacing,
            _buildFormField(
                'Parola', LineIcons.lock, passController, passErrorText, () {
              passCheck();
            }),
            formFieldSpacing,
          ],
        ),
      ),
    );

    Widget gender = Padding(
      padding: EdgeInsets.only(top: 0.0),
      child: Row(
        children: <Widget>[
          Radio(
            value: 0,
            groupValue: _genderRadioBtnVal,
            onChanged: _handleGenderChange,
          ),
          Text("Erkek"),
          Radio(
            value: 1,
            groupValue: _genderRadioBtnVal,
            onChanged: _handleGenderChange,
          ),
          Text("Kadın"),
        ],
      ),
    );
    String genderConrtrol = ' ';
    Widget genderErrorText() {
      return Text(
        _genderRadioBtnVal == -1 ? 'Cinsiyet seçimini yapmalısınız' : ' ',
        style: TextStyle(fontSize: 12, color: Colors.red),
      );
    }

    show() {
      showDialog(
          context: context,
          builder: (BuildContext context) {
            return AlertDialog(
              title: Text('Başarısız Girişim'),
              content:
                  Text('Bu mail adresi üzerinden daha önce hesap açılmıştır'),
              actions: <Widget>[
                new FlatButton(
                  child: new Text("Tamam"),
                  onPressed: () {
                    Navigator.of(context).pop();
                  },
                ),
              ],
            );
          });
    }

    Widget submitBtn = Padding(
      padding: EdgeInsets.only(top: 20.0),
      child: Container(
        margin: EdgeInsets.only(top: 10.0, bottom: 20.0),
        height: 60.0,
        width: MediaQuery.of(context).size.width,
        decoration: BoxDecoration(
          borderRadius: BorderRadius.circular(7.0),
          border: Border.all(color: Colors.white),
        ),
        child: Material(
          borderRadius: BorderRadius.circular(7.0),
          color: primaryColor,
          elevation: 10.0,
          shadowColor: Colors.white70,
          child: MaterialButton(
            onPressed: () {
              setState(() {
                //name check
                nameCheck();
                //surname check
                surnameCheck();
                //mail Check
                mailCheck();

                //username Check
                usernameCheck();
                //Phone Check
                //  phoneCheck();

                //Pass Check
                passCheck();
              });
              if (nameErrorText == null &&
                  surnameErrorText == null &&
                  mailErrorText == null &&
                  usernameErrorText == null &&
                  passErrorText == null &&
                  _genderRadioBtnVal != -1) {
                // Navigator.pushNamed(context, homeViewRoute);
                Post post = Post(
                    email: mailController.text,
                    name: nameController.text,
                    surname: surnameController.text,
                    password: passController.text,
                    username: usernameController.text);
                setState(() {
                  loading = true;
                });
                deneme(post).then((e) {
                  setState(() {
                    status = e.statu;
                    loading = false;
                     if(status){
                      showToast('Hesabınız Oluşturuldu');
                      Navigator.pushNamed(context, loginViewRoute);
                      }
                      else{
                        show();
                      }
                  });

                  print(
                      'Statu => ${e.statu.toString()} , id = ${e.id.toString()}');
                });
                // .then((s){
                //   print('post (. $s .) ');
                // });
              } else {
                //  Navigator.pushNamed(context, homeViewRoute);
              }
            },
            // onPressed: () => Navigator.of(context).pushNamedAndRemoveUntil(homeViewRoute, (Route<dynamic> route) => false),
            child: Text(
              'ARAMIZA KATIL',
              style: TextStyle(
                fontWeight: FontWeight.w800,
                fontSize: 20.0,
                color: Colors.white,
              ),
            ),
          ),
        ),
      ),
    );

    if (!loading) {
      return Scaffold(
        body: SingleChildScrollView(
          child: Container(
            padding: EdgeInsets.only(top: 40.0),
            child: Column(
              children: <Widget>[
                appBar,
                Container(
                  padding: EdgeInsets.only(left: 30.0, right: 30.0),
                  child: Column(
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: <Widget>[
                      pageTitle,
                      registerForm,
                      gender,
                      genderErrorText(),
                      submitBtn
                    ],
                  ),
                )
              ],
            ),
          ),
        ),
      );
    } else {
      return loadingPage();
    }
  }

  Widget _buildFormField(String label, IconData icon,
      TextEditingController _controller, String _errorText, Function complated,
      [TextInputType inputType = TextInputType.text]) {
    return TextField(
      onEditingComplete: complated,
      onChanged: (e) {
        complated();
      },
      controller: _controller,
      decoration: InputDecoration(
        errorText: _errorText,
        // errorStyle: TextStyle(color: Colors.white),
        labelText: label,
        labelStyle: TextStyle(color: Colors.black),
        prefixIcon: Icon(
          icon,
          color: Colors.black38,
        ),
        enabledBorder: UnderlineInputBorder(
          borderSide: BorderSide(color: Colors.black38),
        ),
        focusedBorder: UnderlineInputBorder(
          borderSide: BorderSide(color: Colors.orange),
        ),
      ),
      keyboardType: inputType,
      style: TextStyle(color: Colors.black),
      cursorColor: Colors.black,
    );
  }
}
