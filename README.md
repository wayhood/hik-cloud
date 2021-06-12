# hik-cloud
海康云眸接口


### 示例

```
$hikConfig = $this->config->get('hik');
$hikCloud = new HikCloud([
    'client' => [
        'client_id' => $hikConfig['client_id'],
        'client_secret' => $hikConfig['client_secret'],
        'grant_type' => $hikConfig['grant_type']
    ],
    'cache_path' => '/tmp'
]);

$result = $hikCloud->request('Estate.Communities.List', [
    'pageNo' => 1,
    'pageSize' => 100
]);
```