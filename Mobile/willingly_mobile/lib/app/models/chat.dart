import 'package:willingly/app/models/user.dart';
import 'package:http/http.dart' as http;
import 'package:willingly/app/utils/sessionId.dart';
import 'dart:async';
import 'dart:convert';

import 'package:willingly/json.dart';


class ChatRoom {

  final String id;
  final int reciverId;
  final String userName;
  final String userImage;
  final String unreadCount;
  final String message;
  ChatRoom({this.id, this.reciverId,this.userName,this.userImage,this.unreadCount,this.message});

  factory ChatRoom.fromJson(Map<String, dynamic> json) {
    return ChatRoom(
      id: json['Id'] as String,
      reciverId: json['reciverId'] as int,
      userName: json['userName'] as String,
      userImage: json['userImage'] as String,
      unreadCount: json['unreadCount'] as String,
      message: json['message'] as String,
    );
  }
}
Future<List<Category>> fetchCategory() async {
  final response =
      await http.get('https://willingly.tk/inc/php/Get_FilterConfig.php');
  if (response.statusCode == 200) {
    return   parseCategory(response.body);
  } else {
    throw Exception('Failed to load post');
  }
}
List<ChatRoom> chats = [
  //Yukardaki Seyleri buraya listele sonra chats.dart da goster
  ChatRoom(),
];