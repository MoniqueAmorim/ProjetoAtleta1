<project xmlns="http://maven.apache.org/POM/4.0.0"
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/xsd/maven-4.0.0.xsd">
	<modelVersion>4.0.0</modelVersion>
	<groupId>br.com.escolaibm</groupId>
	<artifactId>atletaweb</artifactId>
	<version>0.0.1-SNAPSHOT</version>
	<packaging>war</packaging>
	<name>NetworkManagement</name>
	<url>http://maven.apache.org</url>
	<repositories>
		<repository>
			<id>jboss</id>
			<name>jboss repo</name>
			<url>http://repository.jboss.org/nexus/content/groups/public/</url>
		</repository>
	</repositories>
	<build>
		<plugins>
			<plugin>
				<groupId>org.apache.maven.plugins</groupId>
				<artifactId>maven-compiler-plugin</artifactId>
				<version>3.8.1</version>
				<configuration>
					<source>1.8</source>
					<target>1.8</target>
				</configuration>
			</plugin>
		</plugins>
		<finalName>NetworkManagement</finalName>
	</build>
	<dependencies>
		<dependency>
			<groupId>org.jboss.weld.se</groupId>
			<artifactId>weld-se-core</artifactId>
			<version>3.0.0.Alpha15</version>
		</dependency>

		<dependency>
			<groupId>javax.cache</groupId>
			<artifactId>cache-api</artifactId>
			<version>1.0.0</version>
		</dependency>

		<dependency>
			<groupId>org.ehcache</groupId>
			<artifactId>ehcache</artifactId>
			<version>3.0.0</version>
		</dependency>

		<dependency>
			<groupId>org.jsr107.ri</groupId>
			<artifactId>cache-annotations-ri-cdi</artifactId>
			<version>1.0.0</version>
		</dependency>

		<dependency>
			<groupId>org.jsr107.ri</groupId>
			<artifactId>cache-ri-impl</artifactId>
			<version>1.0.0</version>
		</dependency>

		<dependency>
			<groupId>org.glassfish.jersey.containers</groupId>
			<artifactId>jersey-container-servlet</artifactId>
			<version>2.22.2</version>
		</dependency>

		<dependency>
			<groupId>com.fasterxml.jackson.datatype</groupId>
			<artifactId>jackson-datatype-jsr310</artifactId>
			<version>2.9.5</version>
		</dependency>

		<dependency>
			<groupId>org.glassfish.jersey.media</groupId>
			<artifactId>jersey-media-json-jackson</artifactId>
			<version>2.22.2</version>
		</dependency>
	</dependencies>

</project>