import 'package:flutter/material.dart';
import '_routing/routes.dart';
import '_routing/router.dart' as router;
import 'theme.dart';

class App extends StatelessWidget {
  static String appname='Willingly';
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: appname,
      debugShowCheckedModeBanner: false,
      theme: buildThemeData(),
      onGenerateRoute: router.generateRoute,
      initialRoute: landingViewRoute,
    );
  }
}
