package com.example.iotapi.repository;

import com.example.iotapi.model.IotModel;
import org.springframework.data.domain.Page;
import org.springframework.data.domain.Pageable;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;

import java.util.List;
import java.util.Optional;

public interface IotRepository extends JpaRepository<IotModel, Long> {
    @Query("SELECT i FROM IotModel i WHERE i.action = -1 ORDER BY i.created DESC")
    List<IotModel> findTopByTimestapDesc();

    Page<IotModel> findAllBy(Pageable pageable);

    @Query("SELECT i FROM IotModel i WHERE i.action=-1 AND " +
            "(:keyword IS NULL OR " +
            "CAST(i.temp AS string) LIKE %:keyword% OR " +
            "CAST(i.humidity AS string) LIKE %:keyword% OR " +
            "CAST(i.light AS string) LIKE %:keyword% OR " +
            "CAST(i.dust AS string) LIKE %:keyword% OR " +
            "CAST(i.created AS string) LIKE %:keyword%) " +
            "ORDER BY i.id DESC")
    Page<IotModel> findAllWithKeyword(@Param("keyword") String keyword, Pageable pageable);

    @Query("SELECT i FROM IotModel i WHERE i.action!= -1 AND " +
            "(:keyword IS NULL OR " +
            "CAST(i.created AS string) LIKE %:keyword% OR " +
            "CAST(i.led AS string) LIKE %:keyword% OR " +
            "CAST(i.action AS string) LIKE %:keyword%) " +
            "ORDER BY i.id DESC")
    Page<IotModel> findAllActionWithKeyword(@Param("keyword") String keyword, Pageable pageable);

    @Query("SELECT i FROM IotModel i WHERE i.action != -1 AND i.led = 2" +
            "ORDER BY i.id DESC")
    Page<IotModel> findAllByFan(@Param("keyword") String keyword, Pageable pageable);

    @Query("SELECT i FROM IotModel i WHERE i.action != -1 AND i.led = 1 " +
            "ORDER BY i.id DESC")
    Page<IotModel> findAllByLed(@Param("keyword") String keyword, Pageable pageable);

    @Query("SELECT i FROM IotModel i WHERE i.action != -1 AND i.led = 3 " +
            "ORDER BY i.id DESC")
    Page<IotModel> findAllByLed2(@Param("keyword") String keyword, Pageable pageable);

    @Query("SELECT i FROM IotModel i WHERE i.action = 1" +
            "ORDER BY i.id DESC")
    Page<IotModel> findAllByActionOn(@Param("keyword") String keyword, Pageable pageable);

    @Query("SELECT i FROM IotModel i WHERE i.action = 0" +
            "ORDER BY i.id DESC")
    Page<IotModel> findAllByActionOff(@Param("keyword") String keyword, Pageable pageable);

    @Query("SELECT i FROM IotModel i WHERE i.action!=- 1 ")
    Page<IotModel> findAllAction(Pageable pageable);

    @Query("SELECT distinct i.humidity FROM IotModel i WHERE i.action = -1 " +
            "ORDER BY i.humidity DESC")
    Page<Double> findHumidityBest(Pageable pageable);
}
