<?php

return [
    'alipay' => [
        'app_id' => '2016092000556255',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6oYjE2yP6XdNNwNiOo5UeSNkt3aKLPjSD5U7sjqR5+UdQo14BJ9D1BARoTt5Y5q85OtzNns3HR0dZd4SHTwSwQH1DmOo8HPRDeG7dcm6zX0o44jwNsXUDP3bdWz/fqVL2FskSLas7z+H1T05NekodV1gkvQDY/ZBAxMwxR4dcACuTw3X8sxSvGbWiXbvcO8LIwcOaVpvAG8l/O929rYFbDQ8MMz849M1DTfHmJBQOwiG1JPpgwcEVp/R1wSfTcyL7urnHc/mdxHWIjGxH0p5tiSyuBL4oCfrD/FMTIDj82zV8GEsa2E7AZ22fesooFCFF6rn+53plOMiP8lhWLTh5QIDAQAB',
        'private_key' => 'MIIEowIBAAKCAQEAmscuTT6fhyIVykzUwvCex/BA2A4/oAF4nYe5mYDQ1GoOdtS8qyLuKxZtxsMQsw50luFDvAFNelapZxjk7U2meQ0KCBjQr1f2DSKCdHt2LOOMH+pYSarVSjP5CH0n+HXBy8U1cjBxu3yWgJn4OYMit3afFtSvY8m8DpwoSmE04kYA5YPn9sDw68HbpD97L6tF0qrx2lzgpvjgepg+USB4hgIf+eI+DYMirnwBUgsUeWpdlqzUAmjd0/+FkTADHqmohF0ty6diah8AOD11MIke22yz/FqEsY0uiHvyZArl5jtJMjfyySytUyLbjtzfuRP/75Nrbsww9p/wQNiJCQYqmQIDAQABAoIBAE+aZVvg+1ca1q4m+b4Q1vjpvc/g9CQs3YXXikNClyTILww6uZYi7u9GJ8t0A6CzrI706EtHODvVWmblzMenihjz9dbYPGwSB0AWIZYa8VqA5U58zk+FBxGUzV3qUKZemf9dO/GwrK3Kk/UsOxgJM8+7uHKbjGD8HjY9ZhNrDzHYFliDRPIwQuIbrje52cPx1M3eRfrna6oLH4EsNYvdbyfm7XORoqG6SxQyjkIWEDw9dw+g1qwpPqv2JQC8Hr5ELGmUlt7Unu/uK1yWtCvRA1Zw7NPJLhy9sOgtRrp/4lDIdnejjpSrMslI210aap2HVK0bjHl6q74Ei871x8053IkCgYEAx+cJTiUlEN/e5TSfYhQjlvXGQx632a/X5n+3GM7FyZ7PgkHDoYjISHHGPusXE/3/PbtOI/2axWBVVYSUAEGOMM/rPFL0YxoBycMa8OBMXf0qCDSmKwe1
EJMiK9RkAb0ZUYnBr+w3Nf2QKGL+LR6S4djgMvRLZ+cvoI0uFJ5pxCcCgYEAxjZp
fFLWdJ5kOoH5fwE5RAR4f9EZA9r9mhzRBjeFHecbHy5pkslSWmh5xRnkFIQA0FAX
iNXxqiGxQk0ZLqOLdafzfy9daup7wwGonCSSXyOGj7vPfvDUUnjKNNfv8yX3m5MP
DraqhZ/i1pw/nPU8VboZXM484EQCfNnL2icQEz8CgYAFNOxWH7uOa/ZXS/6WxGWE
6hPm7abmQaFC/LKdL82RCdTn1KSu0Ww+DtCWFPN97tC2H+nSICnm2DKAzro4I3z7
on7DDHoXFrdTNQS/n2f9zrlIi26EkmfR7bMnJxoPvYgqSodD+MgbXOZjVui97hzv
SwHT8e8A3tGrweGgYdvpYwKBgQCN87PyBIVvuWvAdwsOiPrRGn6N01sd5rzOnSqZ
UDO2aaeD2kJjjGi9NKtYnCU7CBppFaL1LXtIQ57mA78wJpIe7ew1vt8hTdLaopp1
UL+/APtCfteoaqM0eSsfUzKWKS++LECRYgKXdh0HY5kvOHZAUuoNC+qPFkXN0lDq
6CTcEwKBgFHev68L1ljCrPVrqvMOfHF+4yPQAMxzeOWS9t2Sj9CY6tYeu5Y0xuaH
eFKR2ShV+KZ4Sq6jn64x44E0JVzUdQgsvpcKqxbVgMxEbrGtEJ66Lxig/cc180tm
eak8Ai1HWn74qrQQstc7QgIo5vQZkKJp4byw3kHxRD6VFasW+zHn',
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
