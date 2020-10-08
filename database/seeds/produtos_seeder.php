<?php

use Illuminate\Database\Seeder;
use App\ProdutoModel;

class produtos_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $produto = new ProdutoModel();
      $produto->nome = "Ração Magnus 2kg";
      $produto->preco = 29.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Magnus";
      $produto->imagem = "racao1.jpg";
      $produto->comentários = "- Prós: Melhora o aspecto do pêlo, as fezes e urina. - Contras: Nenhum";
      $produto->nota = 2;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração Magnus para cachorro 2kg";
      $produto->preco = 19.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Magnus";
      $produto->imagem = "racao2.jpg";
      $produto->comentários = "- Prós: Embalagem de 25kg. - Contras: Não é atrativa";
      $produto->nota = 2;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração Magnus 2kg";
      $produto->preco = 25.49;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Magnus";
      $produto->imagem = "racao3.jpg";
      $produto->comentários = "Bacana";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para cachorros";
      $produto->preco = 25.49;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Champ";
      $produto->imagem = "racao4.jpg";
      $produto->comentários = "Melhor custo benefício da ração standard, minha cadela não e enjooa";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para cachorros";
      $produto->preco = 23.99;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Magnus";
      $produto->imagem = "racao5.jpg";
      $produto->nota = 4.5;
      $produto->comentários = "Muito bom";
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para cachorros";
      $produto->preco = 23.99;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "racao6.jpg";
      $produto->comentários = "Razoável";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para cães de médio porte";
      $produto->preco = 15.99;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "racao5.jpg";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Cama para cachorro";
      $produto->preco = 49.99;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "cachorro";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto8.jpg";
      $produto->comentários = "Muito bom";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Petisco para gato";
      $produto->preco = 22.99;
      $produto->tipo_produto = "petisco";
      $produto->categoria = "gato";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto1.jpg";
      $produto->comentários = "Bom";
      $produto->nota = 3.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Escova de pelos";
      $produto->preco = 14.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "gato";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto2.jpg";
      $produto->comentários = "Muito bom";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Cama para gato";
      $produto->preco = 45.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "gato";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto3.jpg";
      $produto->comentários = "Muito bom";
      $produto->nota = 4.0;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Caixa de areia";
      $produto->preco = 39.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "gato";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto4.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Arranhador";
      $produto->preco = 59.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "gato";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto5.jpeg";
      $produto->comentários = "";
      $produto->nota = 3.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Brinquedo para cachorro";
      $produto->preco = 9.90;
      $produto->tipo_produto = "brinquedo";
      $produto->categoria = "cachorro";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto6.png";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Cama para gato";
      $produto->preco = 49.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "gato";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto7.jpg";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Cama para cachorro";
      $produto->preco = 99.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "cachorro";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto8.jpg";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para tartaruga";
      $produto->preco = 9.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "tartaruga";
      $produto->marca = "Mega Zoo";
      $produto->imagem = "produto9.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para canários";
      $produto->preco = 29.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "aves";
      $produto->marca = "Reino das Aves";
      $produto->imagem = "produto10.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para peixes";
      $produto->preco = 19.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "peixe";
      $produto->marca = "Alcon";
      $produto->imagem = "produto11.jpg";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para gatos";
      $produto->preco = 11.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "gato";
      $produto->marca = "Whiskas";
      $produto->imagem = "produto12.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para gatos Friskies";
      $produto->preco = 21.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "gato";
      $produto->marca = "Purina";
      $produto->imagem = "produto13.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Peixe de brinquedo para gatos";
      $produto->preco = 99.90;
      $produto->tipo_produto = "brinquedo";
      $produto->categoria = "gato";
      $produto->marca = "Cat Eletronics";
      $produto->imagem = "produto14.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Alimentador automático";
      $produto->preco = 89.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "tartaruga";
      $produto->marca = "Lorem ipsum";
      $produto->imagem = "sem-imagem.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      ///remédios///

      $produto = new ProdutoModel();
      $produto->nome = "Remédio anti-inflamatório";
      $produto->preco = 29.90;
      $produto->tipo_produto = "remédio";
      $produto->categoria = "cachorro";
      $produto->marca = "MSD";
      $produto->imagem = "remedio-cachorro-1.jpg";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Remédio contra sarna e carrapatos";
      $produto->preco = 29.90;
      $produto->tipo_produto = "remédio";
      $produto->categoria = "cachorro";
      $produto->marca = "MSD";
      $produto->imagem = "remedio-cachorro-2.jpg";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Remédio Vermicida";
      $produto->preco = 15.20;
      $produto->tipo_produto = "remédio";
      $produto->categoria = "gato";
      $produto->marca = "Bayer";
      $produto->imagem = "remedio-gato-1.jpg";
      $produto->comentários = "";
      $produto->nota = 3.7;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Doxitrat antibiótico";
      $produto->preco = 21.55;
      $produto->tipo_produto = "remédio";
      $produto->categoria = "gato";
      $produto->marca = "Bayer";
      $produto->imagem = "remedio-gato-2.jpg";
      $produto->comentários = "";
      $produto->nota = 3.7;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Anti-inflamatório para gatos";
      $produto->preco = 34.55;
      $produto->tipo_produto = "remédio";
      $produto->categoria = "gato";
      $produto->marca = "Ouro Fino";
      $produto->imagem = "remedio-gato-3.jpg";
      $produto->comentários = "";
      $produto->nota = 4.0;
      $produto->save();


      //factory(ProdutoModel::class, 40)->create();
    }
}
