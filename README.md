# AirCron Modülü

Bu modülde kullanıcılar giriş yaptığı taktirde arayüzdeki tablo üzerinden zamanlı görevler ekleyip düzenleyebilir. Kullanıcılar tarafından yapılan değişiklikler; <kullanıcı adı> değişkeni ile birlikte sql'de log olarak tutulmaktadır.


- Modülün amacı, yerel tabloda önizleme ve değişiklik sunmak ayrıca bu yapılan değişiklikleri yii'nin user id 'sine göre loglayarak diğer kullanıcılara göstermektir.
- Tablo üzerinde yapılan tüm işlemler detaylıca sql veri tabanında tutulur ve sağ alttaki  "View AirCron Logs" Button'u ile görüntülenebilir.
- Bunun dışında tıpkı phpmyadmin arayüzünden alışkın olduğu üzere mouse ile çift tıklayarak verilerde düzenleme yapılabilir.
- Dinamik olarak (sayfa yenilenmeden) veri eklenebilir veya silinebilir. 
- Tüm bu işlemler ajax ile anlık olarak yii alt yapısı kullanılarak geliştirilen bir ajax handler vasıtası ile veri tabanına aktarılmaktadır

# Kurulum

Modülü KouOsl Portal sistemine kurabilmek için composer.json dosyasına aşağıdaki kodlar eklenmelidir


```
 "repositories": [
        ..........
        {
            "type": "vcs",
            "url": "https://github.com/dokuzucceyrek/yii2-content-180201158.git"
        },
    ],
    
***********

 "require": {
        ..........
        "kouosl/portal-AirCron": "dev-master"
    }, 
 ```
    
    
Ardından Frontend ve Backend için portal klasöründe  portal\frontend\config ve portal\backend\config klasöründeki main.php dosyası aşağıdaki gösterildiği üzere düzenlenir


```
'modules' => [
       ...
     'AirCron' => [
            'class' => 'kouosl\AirCron\Module',
        ],

   ],

 ```

portal\vendor\kouosl\ adresinde portal-AirCron adlı bir klasör açılıp git clone ile bu dizin de çekilebilir.
Modül dosya olarak sisteme implemente edilmiştir.
Portal dizininde composer update işlemi yapılarak modül yüklenir.
İmplementasyonun tamamlaması ve modüle geçiş için vagrant başlatılır;

```
vagrant up
```

Ardından ssh ile sanal makina olan vagrant'a bağlanılmalıdır

vagrant-portal dizinine cmd ile gidilir ve

```
vagrant ssh
```

yazılır.

Ardından veritabanına modül ile alakalı tabloların yüklenebilmesi için migrate işlemi yapılmalıdır.

```
php yii migrate/up --migrationPath=@vendor/kouosl/portal-AirCron/migrations  
```
yazılır.

## Modüle Erişmek için ;

http://portal.kouosl/AirCron

