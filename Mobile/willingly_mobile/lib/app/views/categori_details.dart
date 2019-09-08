import 'package:flutter/material.dart';
import 'package:rflutter_alert/rflutter_alert.dart';
import 'package:willingly/app/_routing/routes.dart';
import 'package:willingly/app/models/user.dart';
import 'package:willingly/app/utils/colors.dart';
import 'package:line_icons/line_icons.dart';
import 'package:flutter/services.dart';
import 'package:willingly/app/utils/loading.dart';
import 'package:willingly/json.dart';

class CategoryDetails extends StatefulWidget {
  final String categoryDetails;

  const CategoryDetails({Key key, this.categoryDetails}) : super(key: key);
  @override
  _CategoryDetailsState createState() => _CategoryDetailsState();
}

class _CategoryDetailsState extends State<CategoryDetails> {
  final _formKey = GlobalKey<FormState>();

  List<Widget> cards = new List();
  bool isLoad = false;
  String title;
  int id;
  List<CategoryPost> categoryList;
  @override
  void initState() {
    cards.add(SizedBox(height: 100,));
    title = widget.categoryDetails.split('##')[0];
    id = int.parse(widget.categoryDetails.split('##')[1]);
    categoryPost(CategoryPostList(pageId: '1', categoryId: '$id').toMap())
        .then((e) {
      List<CategoryPost> categoryList = e.list;
      CategoryPost post;
      for (var i = 0; i < categoryList.length; i++) {
        post = categoryList[i];
        cards.add(BuildIconTile(
            title: post.title,
            id: post.id,
            desc: post.explanation,
            price: post.price,
            rate: post.advertisementRate,
            categoryDetails: post,
            ));
      }
      setState(() {
        isLoad = true;
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
              title,
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
      body: isLoad == false
          ? loadingPage()
          : Container(
            height: MediaQuery.of(context).size.height,
              decoration: BoxDecoration(gradient: primaryGradient),
              child: Stack(
                children: <Widget>[
                  SingleChildScrollView(
                    child: Column(
                      children: cards,
                    ),
                  ),
                  appBar,
                ],
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
  final CategoryPost categoryDetails;
  BuildIconTile(
      {Key key, this.title, this.id, this.desc, this.price, this.rate, this.categoryDetails})
      : super(key: key);

  @override
  Widget build(BuildContext context) {
    double heightDiv = 310.0;
    Widget userImage = Container(
      height: 95.0,
      width: 95.0,
      decoration: BoxDecoration(
        image: DecorationImage(
          image: AssetImage('assets/images/willingly.png'),
          fit: BoxFit.scaleDown,
        ),
        shape: BoxShape.circle,
      ),
    );
    double deviceWidth = MediaQuery.of(context).size.width;
    double deviceHeight = MediaQuery.of(context).size.height;
    return GestureDetector(
      onTap: () {
        Navigator.pushNamed(context, categoryDetailsView,arguments: categoryDetails);
      },
      child: Card(
          elevation: 3,
          shape: RoundedRectangleBorder(borderRadius: new BorderRadius.circular(10.0)),
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
                                )
                              ),
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
                  // Container(
                  //   height: heightDiv * 11 / 18,
                  //   padding: EdgeInsets.all(3),
                  //   child: SingleChildScrollView(
                  //     child: Column(
                  //       children: <Widget>[
                  //         Text(
                  //         _desc,
                  //         style: TextStyle(
                  //           color: Colors.black,
                  //           fontSize: 18.0,
                  //         ),
                  //       ),
                  //       // Container(
                  //       //   child: Icon(LineIcons.arrow_circle_o_right),
                  //       // )
                  //       ],
                  //     )
                  //   ),
                  //   decoration: BoxDecoration(
                  //       border: Border.all(
                  //         color: Colors.grey,
                  //         width: 1.4,
                  //       ),
                  //       borderRadius: BorderRadius.circular(10)),
                  // ),
                ],
              ),
            ),
          )),
    );
  }
}
