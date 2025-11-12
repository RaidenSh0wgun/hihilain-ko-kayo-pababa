-- 1
SELECT emp.last_name, emp.department_id, dep.department_name
FROM employees AS emp 
LEFT JOIN departments AS dep
ON emp.department_id = dep.department_id;

-- 2
SELECT DISTINCT job.job_title, loc.location_id
FROM employees AS emp
JOIN jobs AS job
ON emp.job_id = job.job_id
JOIN departments AS dep
ON emp.department_id = dep.department_id
JOIN locations AS loc
ON dep.location_id = loc.location_id
WHERE emp.department_id = 80;

-- 3
SELECT emp.last_name, dep.department_name, loc.location_id, loc.city
FROM employees AS emp
JOIN departments AS dep
ON emp.department_id = dep.department_id
JOIN locations AS loc
ON dep.location_id = loc.location_id
WHERE emp.commission_pct IS NOT NULL;

-- 4
SELECT emp.last_name, dep.department_name
FROM employees AS emp
JOIN departments AS dep
ON emp.department_id = dep.department_id
WHERE emp.last_name LIKE '%a%';

-- 5
SELECT emp.last_name, job.job_title, emp.department_id, dep.department_name
FROM employees AS emp
JOIN jobs AS job
ON emp.job_id = job.job_id
JOIN departments AS dep
ON emp.department_id = dep.department_id
JOIN locations AS loc
ON dep.location_id = loc.location_id
WHERE loc.city = 'Toronto';

-- 6
SELECT emp.last_name AS "employee",
emp.employee_id AS "emp",
mgr.employee_id AS "mgr",
mgr.last_name AS "manager"
FROM employees emp
JOIN employees mgr
ON emp.manager_id = mgr.employee_id
ORDER BY mgr.employee_id, emp.employee_id;

-- 7
SELECT emp.last_name AS "employee",
mgr.last_name AS "manager",
mgr.employee_id AS "manager",
emp.employee_id AS "employee"
FROM employees AS emp
LEFT JOIN employees AS mgr
ON emp.manager_id = mgr.employee_id
ORDER BY emp.employee_id;

-- 8
SELECT emp1.department_id AS "department",
emp2.last_name AS "colleague",
emp1.last_name AS "employee"
FROM employees AS emp1
JOIN employees AS emp2
ON emp1.department_id = emp2.department_id
AND emp1.employee_id <> emp2.employee_id
ORDER BY emp1.department_id, emp1.last_name, emp2.last_name;

-- 9
SELECT emp.last_name AS "LAST_NAME",
dep.department_name AS "department",
emp.job_id AS "job",
job.job_title AS "job_title"
FROM employees emp
JOIN departments dep
ON emp.department_id = dep.department_id
JOIN jobs job
ON emp.job_id = job.job_id
ORDER BY emp.last_name;

-- 10
SELECT last_name AS last_name, hire_date
FROM employees
WHERE hire_date > (
SELECT hire_date
FROM employees
WHERE last_name = "davies");

-- 11
SELECT emp.last_name AS "LAST_NAME",
emp.hire_date AS "hire date",
mgr.hire_date AS "hire date",
mgr.last_name AS "last name"
FROM employees emp
JOIN employees mgr
ON emp.manager_id = mgr.employee_id
WHERE emp.hire_date < mgr.hire_date
ORDER BY emp.hire_date;