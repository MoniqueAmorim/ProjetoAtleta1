package atletaweb;

import java.lang.annotation.Annotation;

import javax.cache.CacheBean;
import javax.enterprise.inject.spi.CDI;
import javax.inject.Inject;

import atletacache.AtletaCache;

public class App {

	private static final Annotation AtletaCache = null;
	@Inject
	private CacheBean CacheBean;

	@SuppressWarnings(value = { })
	public static void main(String[] args) throws Exception {

		CDI<?> cdi = CDI.getCDIProvider().initialize();
		final App app = (App) cdi.select(App.AtletaCache).get();
		
		final CacheBean cacheBean = app.CacheBean;
		
		print("Coloque o primeiro objeto no cache");
		
        cacheBean.put(1L, new AtletaCache(1L, null));
        
        final AtletaCache p1 = cacheBean.get(1L);
        print(p1);
    
        final AtletaCache p2 = cacheBean.get(1L);
        print(p2);
        
        final AtletaCache p3 = cacheBean.get(1L);
        print(p3);

        print("\n******\n");

        print("Put second object in cache");
        cacheBean.put(2L, new AtletaCache(2L, null));

        // Get id:2
        final AtletaCache p4 = cacheBean.get(2L);
        print(p4);
        // Get id:2
        final AtletaCache p5 = cacheBean.get(2L);
        print(p5);

        print("\n******\n");

        // Invalidate one
        print("Invalidate first object in cache");
        cacheBean.invalidate(1L);

        print(cacheBean.get(1L));
        print(cacheBean.get(2L));

        print("\n******\n");

        // Invalidate all
        print("Invalidate all in cache");
        cacheBean.invalidateAll();

        print(cacheBean.get(1L));
        print(cacheBean.get(2L));

    }
	
	 private static void print(Object object) {
	        System.out.println(object);
	    }
