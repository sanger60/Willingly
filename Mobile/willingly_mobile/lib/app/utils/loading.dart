import 'dart:ui';

import 'package:flutter/material.dart';

Widget loadingPage(){
  return Center(
    child: Container(
      decoration: BoxDecoration(
        color: Colors.white,),
      child: new BackdropFilter(
        filter: new ImageFilter.blur(sigmaX: 10.0, sigmaY: 10.0),
        child: new Container(
          decoration:
            new BoxDecoration(color: Colors.white.withOpacity(0.0)),
          child: Center(
            child: Container(
              height: 50,
              width: 50,
              decoration: BoxDecoration(
                image: DecorationImage(
                  image: AssetImage('assets/images/loading.gif'),
                  fit: BoxFit.contain
                )
              ),
            ),
          ),
        ),
      )
    ),
  );
}