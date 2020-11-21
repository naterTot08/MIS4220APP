INSERT INTO nurseOrders (patientID, encounterID, orderStartDate, orderEndDate, providerID, orderType, orderInterval, duration) 
    VALUES ('1', '1', '2020-11-20-16:38:01', '2020-12-7-16:38:01', '1', '1', 'Hours', '3');

    SELECT nurseOrder FROM nurseOrders WHERE patientID = '1'