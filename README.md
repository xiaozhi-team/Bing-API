# Bing每日图片API

#### 介绍
Bing每日图片API
可以获取Bing的每日壁纸
#### 建议PHP版本
建议使用PHP(7.4)
#### 使用说明
直接对PHP进行访问即可
成功后返回Bing IMG的URL以及其他数据
#### 返回数据
| 序列号 | 返回头       | 返回信息      | 备注                                                                                                     |
|-----|-----------|-----------|--------------------------------------------------------------------------------------------------------|
| 1   | code      | 200/201   | 200为成功,201为失败                                                                                          |
| 2   | msg       | 查询成功/查询失败 | 无                                                                                                      |
| 3   | imgurl    | 图片链接      | 例如:https://cn.bing.com/th?id=OHR.KiteDay_ZH-CN7813901578_1920x1080.jpg&rf=LaDigue_1920x1080.jpg&pid=hp |
| 4   | copyright | 图片版权      | 无                                                                                                      |
#### 问题联系
出现任何问题可提交Issues或者联系QQ:2450135751
