#Extensão Pagamento Interno para Magento 2 (Magento CE 2)
Módulo de meio de pagamento Interno (pedidos via admin) para Magento versão 2. Com este módulo, um meio de pagamento será adicionado para pedidos efetuados no admin, não aparecendo no checkout para seus clientes. É ideal para compras via SAC ou recompras após o cliente efetuar a troca da mercadoria (pedido já pago), por exemplo.
## Instalação
### Instalar usando o [composer](https://getcomposer.org/):

1. Entre na pasta raíz da sua instalação
2. Digite o seguinte comando:
    ```bash
    composer require mageup/module-internalpayment
    ```
    
3. Digite os seguintes comandos, no terminal, para habilitar o módulo:

    ```bash
    php bin/magento module:enable Trezo_InternalPayment --clear-static-content
    php bin/magento setup:upgrade
    ```
### ou baixar e instalar manualmente:


* Criar a seguinte estrutura de pastas app/code/Trezo/InternalPayment
* Baixe a ultima versão [aqui](https://codeload.github.com/mageup/module-internalpayment/zip/master)
* Descompacte o arquivo baixado e copie as pastas para dentro do diretório criado no início
* Digite os seguintes comandos, no terminal, para habilitar o módulo:

    ```bash
    php bin/magento module:enable Trezo_InternalPayment --clear-static-content
    php bin/magento setup:upgrade
    ```
