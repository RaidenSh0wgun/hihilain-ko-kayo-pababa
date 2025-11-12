-- 1
SELECT ROUND(MAX(salary)) AS "maximum",
ROUND(MIN(salary)) AS "minimum",
ROUND(AVG(salary)) AS "average",
ROUND(SUM(salary)) AS "sum"
FROM employees;

-- 2
SELECT emp.job_id AS "job",
ROUND(MAX(emp.salary)) AS "max",
ROUND(MIN(emp.salary)) AS "min",
ROUND(AVG(emp.salary)) AS "avg",
ROUND(SUM(emp.salary)) AS "sum"
FROM employees emp
GROUP BY emp.job_id
ORDER BY emp.job_id;

-- 3
SELECT job_id AS "jobs",
COUNT(*) AS "numof people"
FROM employees
GROUP BY job_id
ORDER BY job_id;

-- 4
SELECT COUNT(DISTINCT manager_id) AS "managers"
FROM employees;

-- 5
SELECT (MAX(salary) - MIN(salary)) 
AS "difference"
FROM employees;

-- 6
SELECT manager_id,MIN(salary)
FROM employees
GROUP BY manager_id
HAVING MIN(salary) > 6000
ORDER BY MIN(salary) DESC;

-- 7
SELECT dep.department_name AS "name",
dep.location_id AS "loc",
COUNT(emp.employee_id) AS "num of people",
ROUND(AVG(emp.salary), 2) AS "salary"
FROM departments dep
JOIN employees emp ON dep.department_id = emp.department_id
GROUP BY dep.department_name, dep.location_id;

-- 8
SELECT COUNT(*) AS "total",
SUM(CASE WHEN EXTRACT(YEAR FROM hire_date) = 1998 THEN 1 END) AS "1998",
SUM(CASE WHEN EXTRACT(YEAR FROM hire_date) = 1997 THEN 1 END) AS "1997",
SUM(CASE WHEN EXTRACT(YEAR FROM hire_date) = 1996 THEN 1 END) AS "1996",
SUM(CASE WHEN EXTRACT(YEAR FROM hire_date) = 1995 THEN 1 END) AS "1995"
FROM employees;

-- 9
SELECT job_id,
SUM(CASE WHEN department_id = 90 THEN salary END) AS "dept=90",
SUM(CASE WHEN department_id = 80 THEN salary END) AS "dept=80",
SUM(CASE WHEN department_id = 50 THEN salary END) AS "dept=50",
SUM(CASE WHEN department_id = 20 THEN salary END) AS "dept=20",
SUM(salary) AS "Total"
FROM employees
WHERE department_id IN (20, 50, 80, 90)
GROUP BY job_id;