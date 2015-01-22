ALTER TABLE `realestate`.`buildings` 
ADD INDEX `building_estate1_idx` (`est_id` ASC);
ALTER TABLE `realestate`.`buildings` 
ADD CONSTRAINT `building_estate`
  FOREIGN KEY (`est_id`)
  REFERENCES `realestate`.`estate` (`est_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;

ALTER TABLE `realestate`.`house` 
ADD INDEX `house_buildings_idx` (`build_id` ASC);
ALTER TABLE `realestate`.`house` 
ADD CONSTRAINT `house_buildings`
  FOREIGN KEY (`build_id`)
  REFERENCES `realestate`.`buildings` (`build_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
ALTER TABLE `realestate`.`house_specifics` 
ADD INDEX `house_specifics_house_idx` (`house_id` ASC);
ALTER TABLE `realestate`.`house_specifics` 
ADD CONSTRAINT `house_specifics_house`
  FOREIGN KEY (`house_id`)
  REFERENCES `realestate`.`house` (`house_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
ALTER TABLE `realestate`.`buildings` 
ADD INDEX `building_house_type_idx` (`housetype_id` ASC);
ALTER TABLE `realestate`.`buildings` 
ADD CONSTRAINT `building_house_type`
  FOREIGN KEY (`housetype_id`)
  REFERENCES `realestate`.`house_type` (`housetype_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;