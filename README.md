Pastas do projeto:

app
 ├── cache
 ├── config
 ├── controllers
 ├── core
 ├── helpers
 ├── hooks
 ├── language
 ├── libraries
 ├── logs
 ├── models
 ├── third_party
 └── views
     ├── errors
     ├── pages
     └── partials

    - Principais pastas:
        - config
            - Nesta pasta, os principais arquivos são config.php, que contém informações de configuração da aplicação. É bem intuitivo. Depois que estiver correto, em produção, pouco se mexerá nele;
            - Outro arquivo importante é o database.php, que contém as informações de configuração ao banco de dados;

        - views
            - Contém as interfaces, a "cara" das páginas. Alteração de texto e e formato, são nestes arquivos que se deve mexer. É necessária atenção ao mexer nestes arquivos, pois há código php nelas.

data

    - Pasta onde são armazenadas as imagens das perguntas

public

    - Contém javascripts, imagens, áudios usados no sistema

system

    - Arquivos do framework Code Igniter. A versão usada aqui é a 3.1.11 (última lançada da versão 3)


Ambiente de Desenvolvimento:
    
    - Arquivos necessários:
        javos.sql
        docker-compose.yml
        nginx.config
        PHP.Dockerfile

    - Executar o ambiente de desenvolvimento

    docker-compose up


Ambiente de produção

    - Hospedado na AWS
    - Máquina EC2 free-tier Ubuntu com nginx e php7.4 instalado
    - MySQL fre-tier na porta 3306
    - Rede:
        - VPC: vpc-500e693b
        - Security Group MySQL (JavosDBSecurityGroup): sg-0b149b3f3902d86bc - permite acesso de outras máquinas EC2 ao banco MySQL
        - Security Group (launch-wizard-1): sg-0d8090f25aea6c3ba - controla o acesso externo à máquina EC2
            Estão liberadas as portas:
                - 80 e 443 para a internet;
                - 22 para IPs específicos do desenvolvedor

                Para alterar estas regras: https://us-east-2.console.aws.amazon.com/ec2/v2/home?region=us-east-2#SecurityGroup:groupId=sg-0d8090f25aea6c3ba

