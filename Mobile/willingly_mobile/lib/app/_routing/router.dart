import 'package:flutter/material.dart';
import 'package:willingly/app/_routing/routes.dart';
import 'package:willingly/app/_routing/routes.dart' as prefix0;
import 'package:willingly/app/settings.dart';
import 'package:willingly/app/views/categori_details.dart';
import 'package:willingly/app/views/categoryDetailsView.dart';
import 'package:willingly/app/views/chat_details.dart';
import 'package:willingly/app/views/home.dart';
import 'package:willingly/app/views/jobads.dart';
import 'package:willingly/app/views/landing.dart';
import 'package:willingly/app/views/login.dart';
import 'package:willingly/app/views/orders.dart';
import 'package:willingly/app/views/profile_settings.dart';
import 'package:willingly/app/views/register.dart';
import 'package:willingly/app/views/reset_password.dart';
import 'package:willingly/app/views/sales.dart';
import 'package:willingly/app/views/termsConditions.dart';
import 'package:willingly/app/views/user_details.dart';

Route<dynamic> generateRoute(RouteSettings settings) {
  switch (settings.name) {
    case landingViewRoute:
      return MaterialPageRoute(builder: (context) => LandingPage());
    case profilSettingRoute:
      return MaterialPageRoute(builder: (context) => ProfileSettingsPage());
    case categoryDetails:
      return MaterialPageRoute(builder: (context) => CategoryDetails(categoryDetails: settings.arguments,));
    case categoryDetailsView:
      return MaterialPageRoute(builder: (context) => CategoryDetailsView(categoryDetails: settings.arguments,));
    case homeViewRoute:
      return MaterialPageRoute(builder: (context) => HomePage());
    case loginViewRoute:
      return MaterialPageRoute(builder: (context) => LoginPage());
    case registerViewRoute:
      return MaterialPageRoute(builder: (context) => RegisterPage());
    case settingPage:
      return MaterialPageRoute(builder: (context) => SettingsPage());
    case orderPage:
      return MaterialPageRoute(builder: (context) => OrdersPage());
    case salesPage:
      return MaterialPageRoute(builder: (context) => SalesPage());
    case jobAdsPage:
      return MaterialPageRoute(builder: (context) => JobAdsPage());
    case termsConditions:
      return MaterialPageRoute(builder: (context) => TermsConditions());
    case resetPasswordViewRoute:
      return MaterialPageRoute(builder: (context) => ResetPasswordPage());
    case chatDetailsViewRoute:
      return MaterialPageRoute(builder: (context) => ChatDetailsPage());
    case userDetailsViewRoute:
      return MaterialPageRoute(builder: (context) => UserDetailsPage());
      break;
    default:
      return MaterialPageRoute(builder: (context) => LandingPage());
  }
}
