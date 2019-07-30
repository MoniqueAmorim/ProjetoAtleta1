package atletacache;

import java.io.Serializable;
import java.util.concurrent.ThreadLocalRandom;

import javax.cache.annotation.CacheDefaults;

@CacheDefaults(cacheName = "atletaCache")
public class AtletaCache implements Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	private Long id;
    private String nome;
    private String status;

    public AtletaCache() {}
    
	public AtletaCache(Long id, String nome) {
		   this.id = id;
	       this.nome = nome;
	 }
	
	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}
    
	public String getStatus() {
		return status;
	}

	public void setStatus(String status) {
		this.status = status;
	}

	public void updateStatus() {
		 setStatus("Cached " + ThreadLocalRandom.current().nextLong(1, 10000));
		
	}

}
