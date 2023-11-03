package com.example.iotapi.config;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.web.cors.CorsConfiguration;
import org.springframework.web.cors.UrlBasedCorsConfigurationSource;
import org.springframework.web.filter.CorsFilter;

@Configuration
public class CorsConfig {
    @Bean
    public CorsFilter corsFilter() {
        UrlBasedCorsConfigurationSource source = new UrlBasedCorsConfigurationSource();
        CorsConfiguration config = new CorsConfiguration();
        config.addAllowedOrigin("*");  // Cho phép tất cả các nguồn gốc
        config.addAllowedMethod("*");  // Cho phép tất cả các phương thức HTTP (GET, POST, PUT, DELETE, v.v.)
        config.addAllowedHeader("*");  // Cho phép tất cả các loại header
        source.registerCorsConfiguration("/**", config);
        return new CorsFilter(source);
    }
}