import 'package:shared_preferences/shared_preferences.dart';

class SharedData{

  static Future<void> setDataTypeString(String key, String value) async {
    final kayitAraci = await SharedPreferences.getInstance();
    kayitAraci.setString(key, value);
  }
  static Future<void> setDataTypeInt(String key, int value) async {
    final kayitAraci = await SharedPreferences.getInstance();
    kayitAraci.setInt(key, value);
  }

  static Future<Object> getData(String key) async {
    final kayitAraci = await SharedPreferences.getInstance();
    return kayitAraci.get(key);
  }
  static Future deleteData(String key) async {
    final kayitAraci = await SharedPreferences.getInstance();
    kayitAraci.remove(key);
  }
}