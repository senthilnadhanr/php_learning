-- order by
SELECT * FROM `myguests` order by id DESC;
SELECT * FROM `myguests` order by lastname DESC

-- having
SELECT * FROM `myguests` GROUP BY lastname HAVING lastname='Miller';
SELECT max(reg_date) FROM `myguests` GROUP BY reg_date HAVING lastname='Miller';
SELECT *,max(id) FROM `myguests` GROUP BY id HAVING firstname='Mary'

-- limit
SELECT * FROM `myguests` LIMIT 0,2;

-- CASE WHEN
SELECT *, (CASE WHEN status=0 THEN 'INACTIVE' ELSE 'ACTIVE' END) as status FROM `myguests`

-- sub query
SELECT *,(SELECT address from myguests_address ma where ma.guest_id=id GROUP BY ma.guest_id) as adrees FROM `myguests`

-- in
SELECT * FROM `myguests` WHERE ID IN(1,4)

-- not in
SELECT * FROM `myguests` WHERE ID NOT IN(1,4)

-- NULL
SELECT * FROM `myguests` WHERE status IS NULL
