import 'package:flutter/material.dart';
import 'package:willingly/app/_routing/routes.dart';
import 'package:willingly/app/models/user.dart';
import 'package:willingly/app/utils/colors.dart';
import 'package:line_icons/line_icons.dart';
import 'package:willingly/json.dart';

class CategoryDetailsView extends StatefulWidget {
  final CategoryPost categoryDetails;

  const CategoryDetailsView({Key key, this.categoryDetails}) : super(key: key);
  @override
  _CategoryDetailsViewState createState() => _CategoryDetailsViewState();
}

class _CategoryDetailsViewState extends State<CategoryDetailsView> {
  CategoryPost thisPost;
  List<Widget> skilsWidget = new List();
  @override
  void initState() {
    thisPost = widget.categoryDetails;
    List<String> skils = thisPost.advertisementSkills.toString().split(',');
    for (var i = 0; i < skils.length; i++) {
      skilsWidget.add(_buildHobbiesCards(skils[i]));
    }
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    // final deviceHeight = MediaQuery.of(context).size.height;
    final deviceWidth = MediaQuery.of(context).size.width;

    Widget cancelBtn = Positioned(
      top: 50.0,
      left: 20.0,
      child: Container(
        height: 35.0,
        width: 35.0,
        decoration: BoxDecoration(
          shape: BoxShape.circle,
          color: Colors.grey.withOpacity(0.5),
        ),
        child: IconButton(
          icon: Icon(LineIcons.close, color: Colors.white),
          onPressed: () => Navigator.pop(context),
          iconSize: 20.0,
        ),
      ),
    );

    Widget userImage = Stack(
      children: <Widget>[
        Hero(
          tag: 'bannerView',
          child: Container(
            height: 350.0,
            width: deviceWidth,
            decoration: BoxDecoration(
              image: DecorationImage(
                image: AssetImage('assets/images/willingly.png'),
                fit: BoxFit.cover,
              ),
            ),
          ),
        ),
        cancelBtn
      ],
    );

    // Widget userName = Container(
    //   padding: EdgeInsets.only(left: 20.0, right: 20.0, top: 20.0),
    //   child: Row(
    //     children: <Widget>[
    //       Text(
    //         thisPost.title.toString(),
    //         style: TextStyle(
    //           fontSize: 25.0,
    //           fontWeight: FontWeight.bold,
    //         ),
    //       ),
    //       SizedBox(
    //         width: 20.0,
    //       ),
    //     ],
    //   )
    // );

    Widget userName = Container(
      padding: EdgeInsets.only(left: 20.0, right: 20.0, top: 15.0,bottom: 8.0),
      child: Text(
        thisPost.title.toString(),
        style: TextStyle(
          fontSize: 25.0,
          fontWeight: FontWeight.bold,
        ),
      ),
    );

    Widget userLocation = Container(
      padding: EdgeInsets.only(left: 20.0, right: 20.0),
      child: Text(
        thisPost.title.toString(),
        style: TextStyle(
          fontSize: 18.0,
          fontWeight: FontWeight.bold,
          color: Colors.grey.withOpacity(0.8),
        ),
      ),
    );

    Widget priceAndRate = Container(
      padding: EdgeInsets.only(left: 20.0, right: 20.0),
      child: Row(
        children: <Widget>[
          Container(
            padding: EdgeInsets.symmetric(horizontal: 3.0),
            height: 30.0,
            width: 60.0,
            decoration: BoxDecoration(
                gradient: chatBubbleGradient,
                borderRadius: BorderRadius.circular(30.0)),
            child: Center(
              child: Row(
                mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                children: <Widget>[
                  Icon(
                    LineIcons.star_o,
                    color: Colors.white,
                  ),
                  Text(
                    thisPost.advertisementRate.toString(),
                    style: TextStyle(
                      fontWeight: FontWeight.bold,
                      color: Colors.white,
                      fontSize: 18.0,
                    ),
                  )
                ],
              ),
            ),
          ),
          SizedBox(width: 20,),
          Container(
            padding: EdgeInsets.symmetric(horizontal: 3.0),
            height: 30.0,
            width: 80.0,
            decoration: BoxDecoration(
                gradient: chatBubbleGradient,
                borderRadius: BorderRadius.circular(30.0)),
            child: Center(
              child: Row(
                mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                children: <Widget>[
                  Icon(
                    LineIcons.money,
                    color: Colors.white,
                  ),
                  Text(
                    thisPost.price.toString() ,
                    style: TextStyle(
                      fontWeight: FontWeight.bold,
                      color: Colors.white,
                      fontSize: 18.0,
                    ),
                  )
                ],
              ),
            ),
          )
        ],
      ),
    );

    Widget aboutUser = Padding(
      padding: EdgeInsets.all(20.0),
      child: Material(
        elevation: 5.0,
        borderRadius: BorderRadius.circular(12.0),
        shadowColor: Colors.white,
        child: Container(
          padding: EdgeInsets.all(15.0),
          width: deviceWidth,
          decoration: BoxDecoration(
            borderRadius: BorderRadius.circular(12.0),
            color: Colors.white,
          ),
          constraints: BoxConstraints(minHeight: 100.0),
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: <Widget>[
              SizedBox(
                height: 5.0,
              ),
              Text(
                "Detayı",
                style: TextStyle(
                  color: Colors.black,
                  fontSize: 18.0,
                  fontWeight: FontWeight.bold,
                ),
              ),
              SizedBox(
                height: 2.0,
              ),
              Text(
                thisPost.explanation,
                style: TextStyle(
                  color: Colors.black54,
                  fontWeight: FontWeight.w600,
                  fontSize: 16.0,
                ),
              )
            ],
          ),
        ),
      ),
    );

    Widget hobbies = Padding(
      padding: EdgeInsets.only(bottom: 20.0, left: 20.0, right: 20.0),
      child: Material(
        elevation: 5.0,
        borderRadius: BorderRadius.circular(12.0),
        shadowColor: Colors.white,
        child: Container(
          padding: EdgeInsets.all(15.0),
          width: deviceWidth,
          decoration: BoxDecoration(
            borderRadius: BorderRadius.circular(12.0),
            color: Colors.white,
          ),
          constraints: BoxConstraints(minHeight: 100.0),
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: <Widget>[
              SizedBox(
                height: 5.0,
              ),
              Text(
                "Kullanılanbilen Araçlar",
                style: TextStyle(
                  color: Colors.black,
                  fontSize: 18.0,
                  fontWeight: FontWeight.bold,
                ),
              ),
              SizedBox(
                height: 2.0,
              ),
              Wrap(children: skilsWidget)
            ],
          ),
        ),
      ),
    );

    return Scaffold(
      body: SingleChildScrollView(
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: <Widget>[
            userImage,
            userName,
            //userLocation,
            priceAndRate,
            aboutUser,
            hobbies,
            Center(
              child: RaisedButton(
                  shape: RoundedRectangleBorder(
                      borderRadius: new BorderRadius.circular(10.0)),
                  onPressed: () {},
                  color: Colors.green,
                  padding: EdgeInsets.all(4),
                  child: Container(
                    padding: EdgeInsets.all(7),
                    child: Text('TEKLİFTE BULUN',
                        style: TextStyle(
                            color: Colors.white, fontWeight: FontWeight.bold)),
                  )),
            ),
            SizedBox(
              height: 20,
            )
          ],
        ),
      ),
    );
  }

  Widget _buildHobbiesCards(String name) {
    return Container(
      padding: EdgeInsets.only(
        left: 10.0,
        right: 10.0,
      ),
      margin: EdgeInsets.only(right: 5.0, bottom: 3.0),
      height: 30.0,
      constraints: BoxConstraints(maxWidth: 80.0),
      decoration: BoxDecoration(
        borderRadius: BorderRadius.circular(12.0),
        color: Colors.transparent,
        border: Border.all(color: Colors.grey, width: 2.0),
      ),
      child: Center(
          child: Text(
        name,
        style: TextStyle(
          fontWeight: FontWeight.w600,
        ),
      )),
    );
  }
}

class BuildIconTile extends StatelessWidget {
  final String title;
  final String desc;
  final String price;
  final String rate;
  final String id;

  BuildIconTile(
      {Key key, this.title, this.id, this.desc, this.price, this.rate})
      : super(key: key);

  @override
  Widget build(BuildContext context) {
    double heightDiv = 310.0;
    Widget userImage = Container(
      height: 95.0,
      width: 95.0,
      decoration: BoxDecoration(
        image: DecorationImage(
          image: AssetImage('assets/images/blank-profile-picture.png'),
          fit: BoxFit.cover,
        ),
        shape: BoxShape.circle,
      ),
    );
    double deviceWidth = MediaQuery.of(context).size.width;
    double deviceHeight = MediaQuery.of(context).size.height;
    String _desc = '';
    if (desc.length > 170) {
      if ((desc.contains('\n') && desc.length > 120)) {
        _desc = desc.substring(0, 120) + ' ...';
      } else {
        _desc = desc.substring(0, 160) + ' ...';
      }
    } else {
      _desc = desc;
    }
    _desc = desc;
    return GestureDetector(
      onTap: () {
        print('a=> ${_desc.length}');
      },
      child: Card(
          elevation: 3,
          shape: RoundedRectangleBorder(
              borderRadius: new BorderRadius.circular(10.0)),
          child: Padding(
            padding: EdgeInsets.all(5),
            child: Container(
              margin: EdgeInsets.fromLTRB(5, 0, 5, 0),
              height: heightDiv * 7 / 18,
              color: Colors.white,
              child: Column(
                children: <Widget>[
                  Container(
                    height: heightDiv * 7 / 18,
                    child: Row(
                      children: <Widget>[
                        Container(
                          width: (deviceWidth - 28) / 3,
                          alignment: Alignment.center,
                          child: Center(
                            child: userImage,
                          ),
                        ),
                        Container(
                          width: (deviceWidth - 28) * 2 / 3,
                          child: Column(
                            children: <Widget>[
                              Container(
                                  height: (heightDiv * 5 / 18),
                                  child: SingleChildScrollView(
                                    child: Column(
                                      children: <Widget>[
                                        Text(
                                          title,
                                          style: TextStyle(
                                            fontWeight: FontWeight.bold,
                                            color: Colors.black,
                                            fontSize: 20.0,
                                          ),
                                        ),
                                      ],
                                    ),
                                  )),
                              Container(
                                height: (heightDiv * 2 / 18),
                                child: Row(
                                  mainAxisAlignment:
                                      MainAxisAlignment.spaceBetween,
                                  children: <Widget>[
                                    Row(
                                      children: <Widget>[
                                        Icon(LineIcons.money),
                                        Text(price)
                                      ],
                                    ),
                                    Row(
                                      children: <Widget>[
                                        Icon(LineIcons.star_o),
                                        Text(rate)
                                      ],
                                    ),
                                  ],
                                ),
                              )
                            ],
                          ),
                        ),
                      ],
                    ),
                  ),
                ],
              ),
            ),
          )),
    );
  }
}
