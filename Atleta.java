package br.com.atleta.bean;

import br.com.atleta.bean.Atleta;

public class Atleta {

	public class Produto {
		private Long codigo;
		private String nome;
		private Long peso;
		private Long altura;
		private Double modalidade;
		private Atleta situacao;
		public Long getCodigo() {
			return codigo;
		}
		public void setCodigo(Long codigo) {
			this.codigo = codigo;
		}
		public String getNome() {
			return nome;
		}
		public void setNome(String nome) {
			this.nome = nome;
		}
		public Long getPeso() {
			return peso;
		}
		public void setPeso(Long peso) {
			this.peso = peso;
		}
		public Long getAltura() {
			return altura;
		}
		public void setAltura(Long altura) {
			this.altura = altura;
		}
		public Double getModalidade() {
			return modalidade;
		}
		public void setModalidade(Double modalidade) {
			this.modalidade = modalidade;
		}
		public Atleta getSituacao() {
			return situacao;
		}
		public void setSituacao(Atleta situacao) {
			this.situacao = situacao;
		}
		@Override
		public String toString() {
			String saida = codigo + " - " + codigo;
			return saida;
	}
 }

	public String getAtleta() {
		// TODO Auto-generated method stub
		return null;
	}

	public String getNome() {
		// TODO Auto-generated method stub
		return null;
	}
}
