import 'package:flutter/material.dart';
import 'package:willingly/app/utils/colors.dart';
import 'package:willingly/app/utils/utils.dart';

ThemeData buildThemeData(){
  final baseTheme = ThemeData(fontFamily: AvailableFonts.primaryFont);

  // return baseTheme.copyWith();
   return baseTheme.copyWith(
     primaryColor: primaryColor,
     primaryColorDark: primaryDark,
     primaryColorLight: primaryLight,
     accentColor: secondaryColor,
   );
}