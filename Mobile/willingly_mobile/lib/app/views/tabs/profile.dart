import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:willingly/app/_routing/routes.dart';
import 'package:willingly/app/models/user.dart' as us;
import 'package:willingly/app/models/user.dart';
import 'package:willingly/app/utils/colors.dart';
import 'package:line_icons/line_icons.dart';
import 'package:url_launcher/url_launcher.dart';
import 'package:willingly/app/utils/sessionId.dart';
import 'package:willingly/app/utils/shared.dart';

class ProfilePage extends StatefulWidget {
  ProfilePage({Key key}) : super(key: key);

  _ProfilePageState createState() => _ProfilePageState();
}

class _ProfilePageState extends State<ProfilePage> {
 @override
  void initState() {
    imgChecker.image.resolve(ImageConfiguration()).addListener(ImageStreamListener(
      (e,b){
        if(mounted){
          setState(() {
           _loaded = true; 
          });
        }
      }
    ));  
    super.initState();
  }

  bool _loaded = false;
  var imgChecker = Image.network(us.User.imageUrl);
  var img = NetworkImage(us.User.imageUrl);
  var placeholder = AssetImage('assets/images/blank-profile-picture.png');

  @override
  Widget build(BuildContext context) {
    final hr = Divider();
    final userStats = Positioned(
      bottom: 10.0,
      left: 40.0,
      right: 40.0,
      child: Row(
        mainAxisAlignment: MainAxisAlignment.spaceAround,
        children: <Widget>[
          _buildUserStats('', ''),
          _buildUserStats('LIKED', ''),
          _buildUserStats('MATCHED', ''),
        ],
      ),
    );

    Widget userImage = Container(
      height: 100.0,
      width: 100.0,
      decoration: BoxDecoration(
        image: DecorationImage(
          image: User.imageUrl == null ? placeholder:_loaded == true?img:placeholder,
          fit: BoxFit.cover,
        ),
        shape: BoxShape.circle,
      ),
    );
    
    Widget userNameLocation = Container(
      padding: EdgeInsets.only(left: 20.0, right: 20.0, top: 15.0,bottom: 8.0),
      child: Column(
        mainAxisAlignment: MainAxisAlignment.center,
        crossAxisAlignment: CrossAxisAlignment.start,
        children: <Widget>[
          Text(
            'Ersan \nTerzi',
            style: TextStyle(
              fontSize: 24.0,
              fontWeight: FontWeight.w900,
            ),
          ),
          Text(
            'sanger60',
            style: TextStyle(
              color: Colors.grey.withOpacity(0.6),
              fontSize: 20.0,
              fontWeight: FontWeight.w600,
            ),
          ),
        ],
      ),
    );

    Widget userInfo = Stack(
      children: <Widget>[
        Padding(
          padding: const EdgeInsets.only(left: 20.0, right: 20.0),
          child: Material(
            elevation: 5.0,
            borderRadius: BorderRadius.circular(8.0),
            shadowColor: Colors.white,
            child: Container(
              height: 220.0,
              width: MediaQuery.of(context).size.width,
              decoration: BoxDecoration(
                borderRadius: BorderRadius.circular(8.0),
                border: Border.all(
                  color: Colors.grey.withOpacity(0.2),
                ),
                color: Colors.white,
              ),
              child: Padding(
                padding: const EdgeInsets.only(left: 20.0, bottom: 20.0),
                child: Row(
                  children: <Widget>[
                    userImage,
                    SizedBox(width: 10.0),
                    userNameLocation
                  ],
                ),
              ),
            ),
          ),
        ),
        // userStats
      ],
    );

    Widget secondCard = Padding(
      padding: EdgeInsets.only(right: 20.0, left: 20.0, bottom: 30.0),
      child: Material(
        elevation: 5.0,
        borderRadius: BorderRadius.circular(8.0),
        shadowColor: Colors.white,
        child: Container(
          height: 344.0,
          decoration: BoxDecoration(
            color: Colors.white,
            borderRadius: BorderRadius.circular(8.0),
          ),
          child: Column(
            children: <Widget>[
              _buildIconTile(LineIcons.user, Colors.red, 'Profilim',
                  () => { Navigator.pushNamed(context, userDetailsViewRoute),}),
              hr,
              _buildIconTile(LineIcons.edit, Colors.purpleAccent,
                  'Profil Ayarları', () => {Navigator.pushNamed(context, profilSettingRoute)}),
              hr,
              _buildIconTile(LineIcons.shopping_cart, Colors.green,
                  'Aldıklarım', () => {Navigator.pushNamed(context, orderPage)}),
              hr,
              _buildIconTile(LineIcons.question, Colors.blue, 'Destek', () {
                _launchURL();
              }),
              hr,
              _buildIconTile(LineIcons.gear, Colors.amber, 'Ayarlar', () => {Navigator.pushNamed(context, settingPage)}),
            ],
          ),
        ),
      ),
    );

    Widget thirdCard = Padding(
      padding: EdgeInsets.only(right: 20.0, left: 20.0, bottom: 10.0),
      child: Material(
        elevation: 5.0,
        borderRadius: BorderRadius.circular(8.0),
        shadowColor: Colors.white,
        child: Container(
          height: 128.0,
          decoration: BoxDecoration(
            color: Colors.white,
            borderRadius: BorderRadius.circular(8.0),
          ),
          child: Column(
            children: <Widget>[
              _buildIconTile(
                  LineIcons.money, Colors.red, 'Satışlerim', () => {Navigator.pushNamed(context, salesPage)}),
              hr,
              _buildIconTile(
                  LineIcons.briefcase, Colors.blue, 'İş İlanlarım', () => {Navigator.pushNamed(context, jobAdsPage)}),
              // hr,
              // _buildIconTile(LineIcons.clock_o, Colors.orangeAccent,
              //     'Alıcı İstekleri', () => {})
            ],
          ),
        ),
      ),
    );

    Widget fourthCard = Padding(
      padding: EdgeInsets.only(right: 20.0, left: 20.0, bottom: 10.0),
      child: Material(
        elevation: 5.0,
        borderRadius: BorderRadius.circular(8.0),
        shadowColor: Colors.white,
        child: Container(
          height: 344.0,
          decoration: BoxDecoration(
            color: Colors.white,
            borderRadius: BorderRadius.circular(8.0),
          ),
          child: Column(
            children: <Widget>[
              _buildIconTile(
                  LineIcons.money, Colors.red, 'Üyelik Sözleşmesi', () => {Navigator.pushNamed(context, termsConditions)}),
              hr,
              _buildIconTile(
                  LineIcons.briefcase, Colors.blue, 'Gizlilik', () => {Navigator.pushNamed(context, jobAdsPage)}),
              hr,
              _buildIconTile(
                LineIcons.clock_o, Colors.orangeAccent, 'Hakkımızda', () => {}),
              hr,
              _buildIconTile(
                LineIcons.clock_o, Colors.orangeAccent, 'Kullanım Şartları', () => {}),
              hr,
              _buildIconTile(
                LineIcons.clock_o, Colors.orangeAccent, 'Nasıl Çalışır?', () => {}),
            ],
          ),
        ),
      ),
    );

    return Scaffold(
      body: SingleChildScrollView(
        child: Column(
          children: <Widget>[
            Container(
              width: MediaQuery.of(context).size.width,
              child: Column(
                children: <Widget>[
                  Stack(
                    children: <Widget>[
                      Container(
                        height: 350.0,
                      ),
                      Container(
                        height: 250.0,
                        decoration: BoxDecoration(gradient: primaryGradient),
                      ),
                      Positioned(top: 100, right: 0, left: 0, child: userInfo)
                    ],
                  ),
                  secondCard,
                  Container(padding: new EdgeInsets.all(20.0),child: Align(alignment: Alignment.topLeft, child: Text('Freelancer', style: TextStyle(fontSize: 18),),),),
                  thirdCard,
                  Container(padding: new EdgeInsets.all(20.0),child: Align(alignment: Alignment.topLeft, child: Text('Hakkımızda', style: TextStyle(fontSize: 18),),),),
                  fourthCard,
                  Container(
                    height: 50,
                    alignment: Alignment.center,
                    child: RaisedButton(
                      shape: RoundedRectangleBorder(
                          borderRadius: new BorderRadius.circular(10.0)),
                      onPressed: () {
                        SharedData.deleteData(SessionId.sharedId).then((e){
                          Navigator.of(context).pushNamedAndRemoveUntil(landingViewRoute,(Route<dynamic> route) => false);
                        });
                      },
                      color: Colors.red,
                      padding: EdgeInsets.all(4),
                      child: Text('ÇIKIŞ YAP',
                          style: TextStyle(
                              color: Colors.white,
                              fontWeight: FontWeight.bold)),
                    ),
                  )
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }

  Widget _buildUserStats(String name, String value) {
    return Column(
      children: <Widget>[
        Text(
          name,
          style: TextStyle(
            color: Colors.grey.withOpacity(0.6),
            fontWeight: FontWeight.w600,
            fontSize: 16.0,
          ),
        ),
        Text(
          value,
          style: TextStyle(
            color: Colors.black87,
            fontWeight: FontWeight.w900,
            fontSize: 20.0,
          ),
        ),
      ],
    );
  }

  Widget _buildIconTile(
      IconData icon, Color color, String title, Function ontap) {
    return GestureDetector(
      onTap: ontap,
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

  _launchURL() async {
    const url = 'https://willingly.tk';
    if (await canLaunch(url)) {
      await launch(url);
    } else {
      throw 'Could not launch $url';
    }
  }
}
