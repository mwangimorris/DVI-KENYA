CREATE TABLE `m_county` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `county_name` varchar(255) NOT NULL,
  `region_id` varchar(255) NOT NULL,
  `county_headquarter` varchar(255) NOT NULL,
  `DHIS_ID` varchar(255) NOT NULL,
  `county_logistician` text NOT NULL,
  `county_logistician_phone` int(10) NOT NULL,
  `county_logistician_email` varchar(255) NOT NULL,
  `county_nurse` text NOT NULL,
  `county_nurse_phone` int(10) NOT NULL,
  `county_nurse_email` varchar(255) NOT NULL,
  `medical_technician` text NOT NULL,
  `medical_technician_phone` int(10) NOT NULL,
  `medical_technician_email` varchar(255) NOT NULL,
  `county_medicalofficer` text NOT NULL,
  `county_medicalofficer_phone` int(10) NOT NULL,
  `county_medicalofficer_email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1