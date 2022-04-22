# calculadora_imc
A aplicação calcula o índice de massa corporal baseado no peso e altura digitados, também grava o histórico dos cálculos no mysql<br>

## Tecnologias:
 - **Mysql versão 10**
 - **Php versão 7.0**
 - **HTML**
 - **CSS**

## Pré-Requisitos:
 - O projeto roda em localhost, portanto será necessário a instalação do [**xampp**](https://www.apachefriends.org/download.html) para rodar o apache na máquina.
 
## Instalação:
- Após instalar o xampp e iniciar o servidor, ao exibir o menu do xampp pode clicar na opção do apache e logo em seguida em **configure** definindo a porta 8080.
-  Deve também colocar a pasta do projeto dentro do diretório onde está simulando o servidor. No meu caso utilizei o caminho do linux **Computer/opt/lampp/htdocs/pastadoprojeto** podendo exibir na url "localhost:8080/diretório".

## Funcionamento da aplicação:

- Após configurada e exibida no navegador através do host local terá 2 menus, o primeiro seria o **Calcule Aqui** com 2 campos chamados **Peso** e **Altura**.
- O segundo menu é onde ficará guardado o histórico do cálculo podendo remover a linha desejada.
- Ao preencher o peso e a altura no primeiro menu e finalizar com o botão calcular IMC é gerado um histórico no segundo menu onde fica gravado o seu peso, altura, imc e o resultado sobre seu peso.
