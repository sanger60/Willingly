import 'package:flutter/material.dart';
import 'package:flutter/cupertino.dart';
import 'package:percent_indicator/linear_percent_indicator.dart';
import 'package:flutter_swiper/flutter_swiper.dart';

class FeedsPage extends StatefulWidget {
  FeedsPage({Key key}) : super(key: key);

  _FeedsPageState createState() => _FeedsPageState();
}

class _FeedsPageState extends State<FeedsPage> {
  num a = 10;
  @override
  Widget build(BuildContext context) {
    //Gonullukler buraya gelecek
    Widget bottomCards = Container(
      padding: EdgeInsets.fromLTRB(0, 10, 0, 10),
      child: ListView(
        shrinkWrap: true,
        children: <Card>[
          Card(
              child: Column(
            children: <Widget>[
              ListTile(
                leading: FlutterLogo(size: 56.0),
                title: Text('Two-line ListTile'),
                subtitle: Text('Here is a second line'),
                trailing: Icon(Icons.keyboard_arrow_right),
              ),
              LinearPercentIndicator(
                width: MediaQuery.of(context).size.width - 60,
                lineHeight: 15.0,
                percent: 0.5,
                center: Text(
                  "50.0%",
                  style: new TextStyle(fontSize: 12.0),
                ),
                trailing: Icon(Icons.mood),
                linearStrokeCap: LinearStrokeCap.roundAll,
                backgroundColor: Colors.grey,
                progressColor: Colors.blue,
              ),
            ],
          )),
        ],
      ),
    );

    Widget topCards = Container(
      child: new Swiper(
        itemBuilder: (BuildContext context, int index) {
          return new Image.network(
            "http://via.placeholder.com/350x150",
            fit: BoxFit.fill,
          );
        },
        itemCount: 3,
        pagination: new SwiperPagination(),
        control: new SwiperControl(),
      ),
    );

    Widget pageTitle = Padding(
      padding: EdgeInsets.only(top: 1.0, bottom: 30.0),
      child: Text(
        "Projeler",
        style: TextStyle(
          fontWeight: FontWeight.bold,
          color: Colors.black,
          fontSize: 40.0,
        ),
      ),
    );
    Widget _buildCarouselItem(int carouselIndex, int itemIndex) {
      return Padding(
        padding: EdgeInsets.symmetric(horizontal: 4.0),
        child: Container(
          decoration: BoxDecoration(
            color: Colors.grey,
            borderRadius: BorderRadius.all(Radius.circular(4.0)),
          ),
        ),
      );
    }

    Widget _buildCarousel(int carouselIndex) {
      return Column(
        mainAxisSize: MainAxisSize.min,
        children: <Widget>[
          Text('Carousel $carouselIndex'),
          SizedBox(
            // you may want to use an aspect ratio here for tablet support
            height: 200.0,
            child: PageView.builder(
              // store this controller in a State to save the carousel scroll position
              controller: PageController(viewportFraction: 0.8),
              itemBuilder: (BuildContext context, int itemIndex) {
                return _buildCarouselItem(carouselIndex, itemIndex);
              },
            ),
          )
        ],
      );
    }

    return Scaffold(
      body: SingleChildScrollView(
        child: Container(
          padding: EdgeInsets.only(top: 40.0),
          width: MediaQuery.of(context).size.width,
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: <Widget>[
              Container(
                padding: EdgeInsets.only(
                    top: 30.0, left: 10.0, right: 10.0, bottom: 30.0),
                child: Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: <Widget>[
                    pageTitle,
                    Container(
                      padding: EdgeInsets.fromLTRB(20, 0, 20, 0),
                      height: 200,
                      child: ListView(
                        scrollDirection: Axis.horizontal,
                        children: <Widget>[
                          Card(
                            child: Container(
                              width: MediaQuery.of(context).size.width * 4 / 6,
                              height: 200,
                              decoration: BoxDecoration(
                                color: Colors.transparent,
                                borderRadius: BorderRadius.circular(10),
                              ),
                              child: Column(
                                children: <Widget>[
                                  Container(
                                    height: 120,
                                    decoration: BoxDecoration(
                                      image: DecorationImage(
                                        image: NetworkImage('https://egirisim.com/wp-content/uploads/2018/10/fazla-gida-turkiye.png'),
                                        fit: BoxFit.cover
                                      ),
                                      borderRadius: BorderRadius.only(
                                          topLeft: Radius.circular(10),
                                          topRight: Radius.circular(10)),
                                    ),
                                  ),
                                  Container(
                                    height: 70,
                                    decoration: BoxDecoration(
                                      color: Colors.grey.shade300,
                                      borderRadius: BorderRadius.only(
                                          bottomLeft: Radius.circular(10),
                                          bottomRight: Radius.circular(10)),
                                    ),
                                    padding: EdgeInsets.all(5),
                                    child: Text('Artan veya fazla kalan gıdalar geri dönüşümü yapıldı ',textAlign: TextAlign.center,style: TextStyle(
                                      fontWeight: FontWeight.bold
                                    ),),
                                  ),
                                ],
                              ),
                            ),
                            
                          ),
                          Card(
                            child: Container(
                              width: MediaQuery.of(context).size.width * 4 / 6,
                              height: 200,
                              decoration: BoxDecoration(
                                color: Colors.transparent,
                                borderRadius: BorderRadius.circular(10),
                              ),
                              child: Column(
                                children: <Widget>[
                                  Container(
                                    height: 120,
                                    decoration: BoxDecoration(
                                      image: DecorationImage(
                                        image: NetworkImage('http://vestnikkavkaza.net/upload2/2018-03-30/15224373025abe8cb61f7b38.13167787.jpg'),
                                        fit: BoxFit.cover
                                      ),
                                      borderRadius: BorderRadius.only(
                                          topLeft: Radius.circular(10),
                                          topRight: Radius.circular(10)),
                                    ),
                                  ),
                                  Container(
                                    height: 70,
                                    decoration: BoxDecoration(
                                      color: Colors.grey.shade300,
                                      borderRadius: BorderRadius.only(
                                          bottomLeft: Radius.circular(10),
                                          bottomRight: Radius.circular(10)),
                                    ),
                                    padding: EdgeInsets.all(5),
                                    child: Text('Artan veya fazla kalan gıdalar geri dönüşümü yapıldı ',textAlign: TextAlign.center,style: TextStyle(
                                      fontWeight: FontWeight.bold
                                    ),),
                                  ),
                                ],
                              ),
                            ),
                            
                          ),
                        ],
                      ),
                    ),
                    Container(
                      height:
                          ((MediaQuery.of(context).size.width - 20) / 2) + 12,
                      child: Column(
                        children: <Widget>[
                          Container(
                            margin: EdgeInsets.symmetric(vertical: 2.0),
                            height:
                                (MediaQuery.of(context).size.width - 20) / 6,
                            child: ListView(
                              scrollDirection: Axis.horizontal,
                              children: <Widget>[
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-01.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-02.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-03.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-04.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-05.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-06.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                              ],
                            ),
                          ),
                          Container(
                            margin: EdgeInsets.symmetric(vertical: 2.0),
                            height:
                                (MediaQuery.of(context).size.width - 20) / 6,
                            child: ListView(
                              scrollDirection: Axis.horizontal,
                              children: <Widget>[
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-07.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-08.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-09.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-10.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-11.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-12.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                              ],
                            ),
                          ),
                          Container(
                            margin: EdgeInsets.symmetric(vertical: 2.0),
                            height:
                                (MediaQuery.of(context).size.width - 20) / 6,
                            child: ListView(
                              scrollDirection: Axis.horizontal,
                              children: <Widget>[
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-13.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-14.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-15.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-16.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-17.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                                Container(
                                  width:
                                      (MediaQuery.of(context).size.width - 20) /
                                          6,
                                  decoration: BoxDecoration(
                                      image: DecorationImage(
                                    image: NetworkImage(
                                        'https://www.undp.org/content/dam/undp/sdg/tiles/sdg-tr-18.png'),
                                    fit: BoxFit.cover,
                                  )),
                                ),
                              ],
                            ),
                          ),
                        ],
                      ),
                    ),
                    // bottomCards,
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
