# Curso PHP POO (Programação orientado a Objeto)

## Canal Node Studio Treinamentos
   https://www.youtube.com/watch?v=hzy_P_H-1CQ&list=PLwXQLZ3FdTVEau55kNj_zLgpXL4JZUg8I&index=1

## Iniciar o Servidor PHP CLI
    $ php -S 127.0.0.1:8000

## Direcionando a pasta da Aula 
    $ php -S 127.0.0.1:8000/Aula-(Numero da aula)

# LISTA DAS AULAS

## 01 - Introdução (CONCLUÍDO)
    A introdução apresenta os conceitos básicos da programação orientada a objetos (POO), que é um paradigma de programação baseado na criação de "objetos". Estes objetos são instâncias de "classes", que podem conter dados (atributos) e funções (métodos). A POO facilita a organização e estruturação do código, tornando-o mais modular, reutilizável e fácil de manter. Os principais pilares da POO são encapsulamento, herança, abstração e polimorfismo.

## 02 - Classes, Atributos e Métodos (CONCLUÍDO)
    Classes são moldes ou modelos para criar objetos. Uma classe define um conjunto de atributos (variáveis) e métodos (funções) que representam o comportamento e as características dos objetos criados a partir dela. Por exemplo, uma classe "Carro" pode ter atributos como "cor", "marca" e "modelo", e métodos como "acelerar" e "frear".

## 03 - Getters and Setters (CONCLUÍDO)
    Getters e setters são métodos utilizados para acessar e modificar os atributos de uma classe de forma controlada. Os getters permitem obter o valor de um atributo, enquanto os setters permitem modificar o valor de um atributo. Eles são úteis para implementar encapsulamento, permitindo validações e controle sobre como os atributos são acessados e alterados.

## 04 - Construtor (CONCLUÍDO)
    O construtor é um método especial de uma classe que é chamado automaticamente quando um novo objeto é criado. Ele é usado para inicializar os atributos do objeto. Em Python, o construtor é definido pelo método __init__(). Por exemplo, def __init__(self, cor, marca, modelo): inicializa um objeto "Carro" com atributos específicos.

## 05 - Herança (CONCLUÍDO)
    Herança é um mecanismo que permite criar uma nova classe com base em uma classe existente. A nova classe (subclasse) herda os atributos e métodos da classe existente (superclasse), podendo adicionar novos atributos e métodos ou modificar os existentes. Isso promove a reutilização de código e a criação de hierarquias de classes. Por exemplo, uma classe "Veículo" pode ser a superclasse de "Carro" e "Moto".

## 06 - Modificadores de Acesso 01 (CONCLUÍDO)
    Modificadores de acesso controlam a visibilidade e a acessibilidade dos atributos e métodos de uma classe. Em Python, os modificadores de acesso são implementados por convenção: um atributo ou método com um único sublinhado (_) é considerado protegido e com dois sublinhados (__) é considerado privado. Atributos e métodos públicos não têm sublinhado.

## 07 - Modificadores de Acesso 02 (CONCLUÍDO)
    Os modificadores de acesso continuam sendo detalhados, explicando que atributos e métodos privados (__nome) são acessíveis apenas dentro da própria classe, enquanto os protegidos (_nome) são acessíveis dentro da classe e nas subclasses. É uma convenção para indicar o nível de acesso esperado e não uma restrição absoluta como em outras linguagens de programação.

## 08 - Abstração (CONCLUÍDO)
    Abstração é o processo de simplificar um sistema complexo, destacando apenas os aspectos essenciais e ignorando os detalhes desnecessários. Em POO, abstração é implementada através de classes abstratas e interfaces. Uma classe abstrata pode conter métodos abstratos (sem implementação) que devem ser implementados pelas subclasses, garantindo um contrato de comportamento.

## 09 - Constantes, Self e Parent (CONCLUÍDO)
    Constantes são valores imutáveis definidos dentro de uma classe e geralmente são escritas em letras maiúsculas. self é uma referência ao próprio objeto e é usado para acessar os atributos e métodos da classe. parent se refere à superclasse de uma classe, permitindo chamar métodos e acessar atributos da superclasse.

## 10 - Métodos e Atributos Estáticos (CONCLUÍDO)
    Métodos e atributos estáticos pertencem à classe em si, e não a instâncias individuais da classe. São definidos usando o decorador @staticmethod para métodos ou simplesmente declarados no corpo da classe para atributos. Eles podem ser acessados diretamente pela classe sem a necessidade de criar um objeto. Úteis para utilitários ou valores constantes compartilhados.

## 11 - Polimorfismo (CONCLUÍDO)
    Polimorfismo é a capacidade de objetos de diferentes classes serem tratados de forma intercambiável através de uma interface comum. Isso permite que métodos com o mesmo nome em diferentes classes executem ações diferentes, dependendo do objeto que os invoca. Polimorfismo promove flexibilidade e a reutilização de código, facilitando a extensão e manutenção do sistema.

## 12 - Interfaces (CONCLUÍDO)
    Interfaces são contratos que especificam um conjunto de métodos que uma classe deve implementar, sem fornecer a implementação desses métodos. Em linguagens como Java, interfaces são uma parte formal da linguagem.

    As interfaces são usadas para garantir que diferentes classes tenham uma estrutura comum, promovendo a interoperabilidade e a consistência entre diferentes partes de um sistema. Uma interface define os   métodos que devem ser implementados pelas classes que a utilizam, garantindo que essas classes compartilhem um comportamento comum.

## 13 - Namespaces (CONCLUÍDO)
    Namespaces (ou espaços de nomes) são um conceito fundamental em PHP e muitas outras linguagens de programação. Eles fornecem um escopo para os identificadores (nomes de classes, funções, constantes, etc.) e ajudam a organizar e evitar conflitos de nomes. Namespaces permitem que desenvolvedores organizem o código de forma modular e evitem colisões de nomes, especialmente em projetos grandes ou quando usando bibliotecas de terceiros.

    Utilizando Namespaces em PHP
        Em PHP, namespaces são declarados usando a palavra-chave namespace no início do arquivo, antes de qualquer outra instrução que não seja um declare.

## 14 - Referência e Clonagem de Objetos (CONCLUÍDO)
    Em PHP, entender a diferença entre referência e clonagem de objetos é crucial para gerenciar como os objetos são manipulados na memória. Isso pode afetar o comportamento e o desempenho de suas aplicações.

    Referência de Objetos
        Em PHP, quando você atribui um objeto a uma variável ou passa um objeto para uma função, você está manipulando uma referência para o objeto, e não uma cópia dele. Isso significa que qualquer alteração feita no objeto através de uma variável afetará todas as outras variáveis que referenciam o mesmo objeto.

## 15 - Tratamento de Exceções (CONCLUÍDO)
    O tratamento de exceções em PHP é uma técnica utilizada para gerenciar erros e condições excepcionais de forma controlada. Em vez de interromper a execução do script, as exceções permitem que o programa capture e lide com esses problemas, oferecendo uma maneira estruturada de gerenciar erros.

    - Conceitos Básicos
    Exceção: É um evento anômalo que pode ocorrer durante a execução de um programa e que interrompe o fluxo normal de execução. Em PHP, exceções são objetos que herdam da classe Exception.
    
    Try-Catch: Estrutura que permite capturar e tratar exceções. O código que pode lançar uma exceção é colocado dentro do bloco try, e o bloco catch contém o código que deve ser executado se uma exceção for lançada.
    
    Throw: Utilizado para lançar uma exceção manualmente.

## 16 - Relação entre os objetos (Associação) (CONCLUÍDO)
    A associação é um dos tipos de relacionamento entre objetos em programação orientada a objetos (OOP). Ela descreve como os objetos interagem uns com os outros e pode ser classificada em diferentes tipos, dependendo da natureza do relacionamento. Em PHP, a associação é implementada através da criação de instâncias de classes dentro de outras classes.

    Tipos de Associação
        Associação Simples (Associação):
        É um relacionamento onde um objeto é ligado a outro, mas ambos têm ciclos de vida independentes. Por exemplo, um "Cliente" pode estar associado a um "Endereço".

## 17 - Relação entre os objetos (Agregação) (CONCLUÍDO)
    A agregação é um dos tipos de relacionamento entre objetos em programação orientada a objetos (OOP). Ela descreve um relacionamento onde um objeto é composto por outros objetos, mas esses objetos componentes podem existir independentemente do objeto composto. Em PHP, a agregação é implementada criando instâncias de classes dentro de outras classes, onde os componentes agregados não dependem exclusivamente do ciclo de vida do objeto que os contém.

    Características da Agregação
        Composição Fraca: Diferente da composição, na agregação os objetos podem existir independentemente do objeto agregado.

    Relação de Parte-Todo: Um objeto (o todo) é composto por outros objetos (as partes).
    Independência: As partes podem existir fora do todo e podem ser compartilhadas com outros objetos.
        Exemplo de Agregação em PHP
        Cenário: Departamento e Funcionários
        Vamos considerar um cenário onde um departamento pode ter vários funcionários, mas os funcionários podem existir independentemente do departamento. Esse é um exemplo clássico de agregação.

## 18 - Relação entre os objetos (Composição) (CONCLUÍDO)
    A composição é um tipo de relacionamento entre objetos em programação orientada a objetos (OOP) onde um objeto é composto por outros objetos, mas, ao contrário da agregação, os objetos componentes não podem existir independentemente do objeto composto. Em PHP, a composição é implementada criando instâncias de classes dentro de outras classes, onde os componentes fazem parte do ciclo de vida do objeto que os contém.

    Características da Composição
        Composição Forte: Os objetos componentes não podem existir sem o objeto composto.
        Relação de Parte-Todo: Um objeto (o todo) é composto por outros objetos (as partes) que são destruídos junto com ele.
        Dependência: As partes dependem completamente do ciclo de vida do todo.

    Exemplo de Composição em PHP
        Cenário: Carro e Componentes (Motor, Rodas)
    Vamos considerar um cenário onde um carro é composto por um motor e várias rodas. Esses componentes não têm significado fora do contexto do carro e são destruídos junto com o carro.

## 19 - Métodos Mágicos (CONCLUÍDO)
    Métodos mágicos em PHP são métodos especiais que têm um comportamento predefinido associado a eles. Eles são chamados automaticamente em determinadas situações, dependendo do contexto no qual são usados. Esses métodos têm dois sublinhados duplos (__) como prefixo em seus nomes. Eles fornecem uma maneira conveniente de definir comportamentos personalizados para operações comuns em objetos, como acesso a propriedades, chamadas de métodos inexistentes, serializado e assim por diante.

    Aqui estão alguns dos métodos mágicos mais comumente usados em PHP:

    __construct(): Este método é chamado automaticamente quando um objeto é instanciado. É usado para inicializar o objeto e configurar seu estado inicial.

    __destruct(): É chamado automaticamente quando um objeto é destruído ou quando o script termina. É usado para liberar recursos ou executar tarefas de limpeza.

    __get($propriedade): Chamado automaticamente quando o código tenta acessar uma propriedade inacessível ou não existente de um objeto. É útil para criar propriedades virtuais ou para implementar lógica personalizada de acesso.

    __set($propriedade, $valor): Chamado automaticamente quando o código tenta definir o valor de uma propriedade inacessível ou não existente de um objeto. É útil para validar ou modificar valores atribuídos a propriedades.

    __call($método, $argumentos): Invocado automaticamente quando o código tenta chamar um método inacessível ou não existente de um objeto. É útil para implementar lógica personalizada de chamada de método ou para encaminhar chamadas de método para outros objetos.

    __toString(): Chamado automaticamente quando um objeto é convertido em uma string, geralmente usando a função echo ou print. É usado para controlar como o objeto é representado como uma string.

    __clone(): Invocado automaticamente quando um objeto é clonado usando a palavra-chave clone. É usado para realizar inicializações ou configurações especiais após a clonagem do objeto.

    Esses são apenas alguns exemplos dos muitos métodos mágicos disponíveis em PHP. Eles permitem uma flexibilidade significativa no comportamento dos objetos e são amplamente utilizados em programação orientada a objetos em PHP.

## 20 - Composer (CONCLUÍDO)
    Composer é uma ferramenta de gerenciamento de dependências para PHP, projetada para facilitar a instalação e o gerenciamento de bibliotecas de terceiros em projetos PHP. Ele resolve muitos problemas comuns relacionados ao gerenciamento de dependências, como instalação, atualização, autoloading e resolução de conflitos de versão.

    Funcionalidades Principais  
        Gerenciamento de Dependências: Composer permite declarar as dependências do seu projeto em um arquivo composer  .json. Ele resolve automaticamente as dependências e instala as bibliotecas necessárias.

    Autoloading: Composer gera automaticamente um autoloader PSR-4 para carregar classes automaticamente conforme   necessário, evitando a necessidade de incluir manualmente arquivos de classes.

    Atualização de Dependências: Composer permite atualizar facilmente todas as bibliotecas instaladas para suas v  ersões mais recentes compatíveis.

    Instalação Global: Composer pode ser instalado globalmente no sistema, permitindo que seja usado em vários pro  jetos sem a necessidade de instalação repetida.

    Resolução de Conflitos: Se houver conflitos de versão entre diferentes bibliotecas, Composer tentará resolvê-l  os instalando versões compatíveis de todas as dependências.

    Uso Básico  
    Instalação: Para instalar o Composer globalmente, basta baixar e executar o script de instalação fornecido no   site oficial. Depois, você pode usar o comando composer em qualquer lugar no seu sistema.

    Criação do Arquivo composer.json: No diretório raiz do seu projeto, crie um arquivo composer.json e defina as   dependências do seu projeto.

    Instalação de Dependências: Execute composer install para instalar todas as dependências definidas no arquivo   composer.json.

    Autoloading: Use o autoloader gerado pelo Composer para carregar automaticamente as classes necessárias no seu   projeto.

    Atualização de Dependências: Execute composer update para atualizar todas as bibliotecas instaladas para suas   versões mais recentes compatíveis.

## 21 - Variáveis de Ambiente e Servidor Embutido (CONCLUÍDO)
    Variáveis de ambiente e o servidor embutido do PHP são recursos importantes que facilitam o desenvolvimento e a configuração de aplicativos PHP.

    Variáveis de Ambiente
        As variáveis de ambiente são valores dinâmicos que podem afetar o comportamento de processos em execução no sistema operacional. No contexto do PHP, as variáveis de ambiente são frequentemente usadas para configurar e personalizar aplicativos, como definir credenciais de banco de dados, configurar caminhos de arquivos e muito mais.

    Alguns exemplos comuns de variáveis de ambiente no PHP incluem:

    $_ENV: Um array associativo contendo as variáveis de ambiente definidas no ambiente onde o script está sendo executado.
    
    $_SERVER: Um array associativo contendo informações sobre o servidor web, como cabeçalhos HTTP, caminhos de arquivos e diretórios, informações de conexão e muito mais.

    As variáveis de ambiente podem ser definidas no servidor web ou no arquivo de configuração do PHP (php.ini). Elas também podem ser definidas manualmente antes de executar um script PHP usando o comando export no Linux ou set no Windows.

    Servidor Embutido do PHP
        O servidor embutido do PHP é uma maneira conveniente de executar aplicativos PHP localmente durante o desenvolvimento, sem a necessidade de configurar um servidor web completo, como Apache ou Nginx.

    Para iniciar o servidor embutido, você pode usar o seguinte comando no terminal:

    Copiar código
    php -S localhost:8000
    Isso inicia o servidor embutido na porta 8000 do localhost. Você pode acessar seu aplicativo PHP navegando para http://localhost:8000 em seu navegador.

    Uso de Variáveis de Ambiente com o Servidor Embutido
    Ao usar o servidor embutido do PHP, você também pode definir variáveis de ambiente diretamente na linha de comando antes de iniciar o servidor. Por exemplo:

    makefile
    Copiar código
    VAR1=valor1 VAR2=valor2 php -S localhost:8000
    Isso define as variáveis de ambiente VAR1 e VAR2 com os valores valor1 e valor2, respectivamente, antes de iniciar o servidor embutido.

    Benefícios
        Simplifica o Desenvolvimento: O servidor embutido facilita o desenvolvimento local de aplicativos PHP sem a necessidade de configurar um servidor web completo.
    Flexibilidade de Configuração: O uso de variáveis de ambiente permite configurar aplicativos PHP de forma flexível, sem modificar o código fonte, tornando-os mais portáteis e fáceis de implantar em diferentes ambientes.

    Resumo
        Variáveis de ambiente e o servidor embutido do PHP são recursos valiosos que simplificam o desenvolvimento e a configuração de aplicativos PHP. Eles fornecem flexibilidade e conveniência, permitindo personalizar e executar aplicativos PHP de maneira eficiente em diferentes ambientes. Dominar o uso desses recursos é fundamental para desenvolvedores PHP que desejam criar aplicativos robustos e escaláveis.

## 22 - Composer Init, Require e Update (CONCLUÍDO)
    O Composer é uma ferramenta essencial para gerenciar dependências em projetos PHP. Ele simplifica o processo de instalação, atualização e remoção de bibliotecas de terceiros, garantindo que todas as dependências sejam gerenciadas de forma eficiente e sem conflitos de versão. Vamos explorar três comandos principais do Composer: init, require e update.

    1. Composer Init
        O comando composer init é usado para criar um novo arquivo composer.json em um projeto existente ou para iniciar um novo projeto PHP. Ele solicitará informações sobre o projeto, como nome, descrição, autor e dependências, e gerará um arquivo composer.json com base nessas informações.

    Exemplo:

    $ composer init

    2. Composer Require
        O comando composer require é usado para adicionar uma nova dependência ao projeto. Você precisa especificar o nome do pacote que deseja instalar. O Composer automaticamente resolve e instala todas as dependências necessárias e atualiza o arquivo composer.json e o arquivo composer.lock conforme necessário.

    Exemplo:

    $ composer require monolog/monolog

    3. Composer Update
        O comando composer update é usado para atualizar todas as dependências de um projeto PHP para suas versões mais recentes compatíveis. Ele lê as versões especificadas no arquivo composer.json e verifica se há atualizações disponíveis. Se uma atualização estiver disponível, o Composer atualiza as dependências para suas versões mais recentes compatíveis e atualiza o arquivo composer.lock.

    Exemplo:

    sql
    $ composer update
    
    Resumo
        composer init: Inicia um novo projeto PHP ou gera um arquivo composer.json em um projeto existente, solicitando informações sobre o projeto.
    
        composer require: Adiciona uma nova dependência ao projeto, resolve e instala automaticamente todas as dependências necessárias.
    
        composer update: Atualiza todas as dependências de um projeto para suas versões mais recentes compatíveis, de acordo com as especificações no arquivo composer.json.
    
        Esses comandos são fundamentais para o gerenciamento eficiente de dependências em projetos PHP. Eles permitem que os desenvolvedores instalem, atualizem e removam bibliotecas de terceiros de forma fácil e segura, garantindo que todas as dependências sejam gerenciadas de maneira adequada e eficiente.

## 23 - Composer Install (CONCLUÍDO)
    O comando composer install é uma parte fundamental do processo de gerenciamento de dependências em projetos PHP usando o Composer. Ele é usado para instalar todas as dependências listadas no arquivo composer.json de um projeto.

    Funcionalidades Principais
        Instalação de Dependências: O Composer lê o arquivo composer.json e instala todas as dependências listadas nele, incluindo as dependências diretas e quaisquer dependências indiretas necessárias.

    Atualização do Arquivo composer.lock: Após a instalação das dependências, o Composer atualiza o arquivo composer.lock com as versões específicas das dependências instaladas, garantindo que o mesmo conjunto de versões seja instalado em todos os ambientes.

    Autoloading: O Composer gera automaticamente um autoloader PSR-4 para carregar classes automaticamente conforme necessário, facilitando o uso das classes das bibliotecas instaladas.

    Como Usar
        Navegue até o Diretório do Projeto: Abra um terminal ou prompt de comando e navegue até o diretório do projeto PHP onde está localizado o arquivo composer.json.

    Execute o Comando: Execute o comando composer install no terminal. O Composer lerá o arquivo composer.json e instalará todas as dependências listadas nele.

    Exemplo
    Suponha que seu arquivo composer.json contenha as seguintes dependências:

    json
        {
            "require": {
                "monolog/monolog": "^2.0",
                "guzzlehttp/guzzle": "^7.0"
            }
        }

    Ao executar composer install, o Composer instalará as versões mais recentes das bibliotecas Monolog e Guzzle HTTP, resolvendo automaticamente quaisquer dependências necessárias.

    Benefícios
        Gestão de Dependências Simplificada: O Composer simplifica significativamente o processo de instalação e gerenciamento de dependências em projetos PHP.
        Consistência de Ambiente: O arquivo composer.lock garante que o mesmo conjunto de versões de dependências seja instalado em todos os ambientes, mantendo a consistência do ambiente de desenvolvimento, teste e produção.
        Autoloading Automático: O Composer gera automaticamente um autoloader PSR-4, facilitando o uso das classes das bibliotecas instaladas sem a necessidade de incluir manualmente arquivos de classes.
    
    Resumo
        O comando composer install é essencial para instalar e gerenciar dependências em projetos PHP usando o Composer. Ele simplifica o processo de instalação de bibliotecas de terceiros, garantindo que todas as dependências sejam instaladas de forma eficiente e consistente. Integrar o Composer ao fluxo de trabalho de desenvolvimento PHP é uma prática recomendada para criar e manter aplicativos PHP robustos e escaláveis.

## 24 - CRUD com PDO, Singleton e Autoload #1 (CONCLUÍDO)
    Para criar um CRUD (Create, Read, Update, Delete) com PDO, Singleton e Autoload em PHP, você precisará seguir alguns passos. Vou te guiar através dos conceitos e da implementação de cada um deles:

    1. PDO (PHP Data Objects)
        O PDO é uma extensão do PHP que fornece uma interface uniforme para acessar bancos de dados. Ele oferece suporte a diversos bancos de dados, como MySQL, PostgreSQL, SQLite, etc. Aqui está um exemplo básico de como você pode usar o PDO para conectar e executar consultas em um banco de dados MySQL:

    2. Singleton
        O padrão Singleton é um padrão de design que garante que uma classe tenha apenas uma instância e fornece um ponto global de acesso a essa instância. Aqui está um exemplo de implementação do Singleton:

    3. Autoload
        O autoload é um recurso do PHP que permite carregar automaticamente as classes quando são necessárias. Em vez de incluir manualmente todos os arquivos de classe em seu script, você pode usar uma função de autoload para carregar automaticamente as classes conforme necessário. Aqui está um exemplo de implementação de autoload simples:

    4. CRUD
        Com o PDO, Singleton e Autoload configurados, você pode criar uma classe para lidar com as operações CRUD em seu banco de dados. Aqui está um exemplo simplificado de uma classe de CRUD:
    
## 25 - (CONCLUÍDO)
## 26 - (CONCLUÍDO)
## 27 - (CONCLUÍDO)